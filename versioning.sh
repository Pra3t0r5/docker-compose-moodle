#!/bin/bash
sshpass -p '.Albertengo159$' rsync --progress -avz -e 'ssh ' /home/praetors/Projects/wordpress/docker-compose-moodle/html/ fernando@ultracore.com.ar:~/docker-compose-moodle/html 2>&1 | tee -a lastRun.log
sshpass -p '.Albertengo159$' rsync --progress -avz -e 'ssh ' /home/praetors/Projects/wordpress/docker-compose-moodle/moodledata/ fernando@ultracore.com.ar:~/docker-compose-moodle/moodledata 2>&1 | tee -a lastRun.log
sshpass -p '.Albertengo159$' rsync --progress -avz -e 'ssh ' /home/praetors/Projects/wordpress/docker-compose-moodle/db_dumps/ fernando@ultracore.com.ar:~/docker-compose-moodle/db_dumps 2>&1 | tee -a lastRun.log
