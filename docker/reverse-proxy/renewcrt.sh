#!/bin/bash

#Script checks for certificate renewals and restarts reverse proxy container if certificates have been renewed 
docker compose run --rm certbot renew | grep 'No renewals were attempted'
if [ $? -ne 0 ]
then
    docker compose exec nginx nginx -s reload
fi
