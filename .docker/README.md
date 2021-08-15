# crater

###

http://localhost:9111

##### Install docker container

docker-compose -f .docker/docker-compose.yml up -d --build

#### Install project

composer install

##### Connect to console

winpty docker exec -it evwerkz_crater bash

#### mail and mailhog october cms config

- /usr/bin/mhsendmail --smtp-addr mailhog:1025 -t
