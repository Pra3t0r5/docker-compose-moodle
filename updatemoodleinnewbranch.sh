#!/bin/bash
# docker-compose down --volumes
# docker system prune -af #ATENCION, BORRA TODAS LAS IMAGENES Y CONTENEDORES PRESENTES EN EL SISTEMA
# git clone https://github.com/Pra3t0r5/docker-compose-moodle.git docker-compose-moodle-310 && cd docker-compose-moodle-310
# git checkout origin mercadopago
git checkout -b MOODLE_310
rm -rf html
git clone --branch MOODLE_310_STABLE --depth 1 git://github.com/moodle/moodle html
# cp config.php html/config.php
docker-compose up -d
POSTGRES_USER=ucadmin
POSTGRES_DB=moodle
DB_DUMP_NAME=dump-init.20201120185818.dump
docker-compose exec postgres pg_restore -U ${POSTGRES_USER} -d postgres -c -C -O --role ${POSTGRES_USER} /opt/db_dumps/${DB_DUMP_NAME}