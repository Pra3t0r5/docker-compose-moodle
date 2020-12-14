#!/bin/bash -e
echo "> Moodle-Docker-Compose Update and Restore initialized"
POSTGRES_DB=moodle
POSTGRES_USER=ucadmin
DB_DUMP_NAME=dump-init.$(date +"%Y%m%d%H%M%S").dump

echo ""
echo "> Dumping database into db_dumps/${DB_DUMP_NAME} (1/6)"
docker-compose exec postgres pg_dump -U ${POSTGRES_USER} ${POSTGRES_DB} -Fc -f /opt/db_dumps/${DB_DUMP_NAME} || echo "(!) Database container not running, skipping"
sleep 5s

cd db_dumps/
shopt -s nullglob
for f in * .*; do
    [[ -d $f ]] && continue
    [[ $f -nt $latest ]] && latest=$f
done
lastDump=$(printf '%s\n' "$latest")
cd ../

echo ""
echo "> Saving Custom Styles (2/6)"
cp html/theme/eguru/lib.php eguru-main-backup.php
cp html/theme/moove/scss/moove/_footer.scss moove-footer-backup.php
cp html/theme/moove/scss/moove/_frontpage.scss moove-frontpage-backup.php

echo ""
echo "> Dropping Containers and Volumes (3/6)"
docker-compose down --volumes

# echo ""
# echo "System-wide docker clearing"
# docker system prune -af;

echo ""
echo "> Restoring Styles (4/6)"
cp eguru-main-backup.php html/theme/eguru/lib.php 
cp moove-footer-backup.php html/theme/moove/scss/moove/_footer.scss 
cp moove-frontpage-backup.php html/theme/moove/scss/moove/_frontpage.scss 

echo ""
echo "> Restoring Containers (5/6)"
docker-compose up -d

DB_DUMP_NAME=${lastDump}

sleep 10s

echo ""
echo "> Restoring Database ${DB_DUMP_NAME}(6/6)"
docker-compose exec postgres pg_restore -U ${POSTGRES_USER} -d postgres -c -C -O --role ${POSTGRES_USER} /opt/db_dumps/${DB_DUMP_NAME}

echo ""
echo "> Update and Restore Succesful, Showing Logs:"

docker-compose logs -f --tail="all" php-fpm
