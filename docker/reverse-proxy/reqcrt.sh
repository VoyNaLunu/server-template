#!/bin/bash

if [ -z "$1" ]
then
    echo -e "Error: you have to specify domain names for which certificates will be requested, example:\nreqcrt.sh example.com,www.example.com" && exit 1
fi
#disable nginx configurations for https so nginx can start before any certificate has been requested
conf_files="$(ls --format=single-column nginx/conf/*443*.conf)"  &>/dev/null 2>&1
if [ ! -z "${conf_files}" ]
then
    for conf in $conf_files
    do
        mv $conf $conf.disabled
    done
fi

#request certificate for domains passed as argument
if [ -z "$2" ]
then
    docker compose run --rm  certbot certonly --webroot --webroot-path /var/www/certbot/ -d $1
else
    docker compose run --rm  certbot certonly --webroot --webroot-path /var/www/certbot/ -d $1 -m $2
fi

sleep 5

#enable nginx configurations for https
disabled_conf_files="$(ls --format=single-column nginx/conf/*443*.disabled)" &>/dev/null 2>&1
if  [ ! -z "${disabled_conf_files}" ]
then
    for conf in $disabled_conf_files
    do
        new_name=$(sed 's/.disabled//' <(echo ${conf}))
        mv $conf $new_name
    done
fi

#generate DH parameters
if [ ! -f certbot/conf/dhparam.pem ]
then
    openssl dhparam -out certbot/conf/dhparam.pem 2048
fi