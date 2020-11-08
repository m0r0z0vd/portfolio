#!/usr/bin/env bash

set -e

cd ./docker
docker-compose down -v
docker-compose build
docker-compose up -d
docker-compose exec symfony-api composer install
echo "Waiting for DB connection..."
sleep 7
echo "Done."
docker-compose exec symfony-api php bin/console doctrine:migrations:migrate --no-interaction
cd ..
