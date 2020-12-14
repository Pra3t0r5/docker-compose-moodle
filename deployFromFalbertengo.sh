#!/bin/bash
sshpass -p '.Albertengo159$' rsync --progress -avz -e 'ssh ' /home/praetors/Projects/wordpress/docker-compose-moodle-39/html/ fernando@ultracore.com.ar:~/mava-39/html 2>&1 | tee -a lastRun.log
sshpass -p '.Albertengo159$' rsync --progress -avz -e 'ssh ' /home/praetors/Projects/wordpress/docker-compose-moodle-39/moodledata/ fernando@ultracore.com.ar:~/mava-39/moodledata 2>&1 | tee -a lastRun.log
sshpass -p '.Albertengo159$' rsync --progress -avz -e 'ssh ' /home/praetors/Projects/wordpress/docker-compose-moodle-39/db_dumps/ fernando@ultracore.com.ar:~/mava-39/db_dumps 2>&1 | tee -a lastRun.log
sshpass -p '.Albertengo159$' rsync --progress -avz -e 'ssh ' /home/praetors/Projects/wordpress/docker-compose-moodle-39/.gitignore fernando@ultracore.com.ar:~/mava-39/.gitignore 2>&1 | tee -a lastRun.log
