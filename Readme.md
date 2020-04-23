# Wordpress Deployment Template
Including:  
Nginx, PHP 7.4 FPM, Memcached, MySql

## Launch Development Instance
1. `docker network create traefik_front`
2. `docker-compose -f docker-compose.dev.yml pull`
3. ` docker-compose -f docker-compose.dev.ymlup -d`

### Logging in to the Admin Panel
https://localhost/wp-admin/
* admin
* password

## Deployment

1. `docker network create traefik_front`
2. `docker-compose pull`
3. ` docker-compose up -d`
