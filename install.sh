#!/bin/bash

apt-get update
apt-get install -y libxml2-dev
docker-php-ext-install soap
php src/Generator.php
