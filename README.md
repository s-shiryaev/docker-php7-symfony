# Docker Symfony (Nginx, Postgres, Redis, PHP-FPM)
A docker multicontainer with nginx, postgres, redis and a preconfigured symfony project.

[![Build Status](https://travis-ci.com/MrSmile2114/docker-php7-symfony.svg?branch=master)](https://travis-ci.com/MrSmile2114/docker-php7-symfony)

## Installation
1. Build/run containers with (with and without detached mode)

    ```
    docker-compose build
    docker-compose up -d
    ```

2. Composer install
    ```
    docker exec php-fpm  composer --no-interaction install
    ```
   

## How to Use

* Enter Symfony container
    ```
    docker-compose exec php sh
    # OR
    docker exec -it php-fpm sh
    ```

* Run whatever you want (E.g. `composer require `)