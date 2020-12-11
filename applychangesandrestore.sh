#!/bin/bash -e
POSTGRES_DB=moodle
POSTGRES_USER=ucadmin
DB_DUMP_NAME=dump-init.$(date +"%Y%m%d%H%M%S").dump

docker-compose exec postgres pg_dump -U ${POSTGRES_USER} ${POSTGRES_DB} -Fc -f /opt/db_dumps/${DB_DUMP_NAME}

docker-compose down --volumes
# docker system prune -af;
docker-compose up -d
# set DB_DUMP_NAME dump-init.20201210190454.dump; 

docker-compose exec postgres pg_restore -U ${POSTGRES_USER} -d postgres -c -C -O --role ${POSTGRES_USER} /opt/db_dumps/${DB_DUMP_NAME}
