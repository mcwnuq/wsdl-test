#!/bin/bash
docker run --rm -v $(pwd):/app -w /app composer install --ignore-platform-reqs
docker run -it --rm -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli bash
