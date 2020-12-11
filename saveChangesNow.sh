#!/bin/bash -e
POSTGRES_DB=moodle
POSTGRES_USER=ucadmin
DB_DUMP_NAME=dump-init.$(date +"%Y%m%d%H%M%S").dump

docker-compose exec postgres pg_dump -U ${POSTGRES_USER} ${POSTGRES_DB} -Fc -f /opt/db_dumps/${DB_DUMP_NAME}