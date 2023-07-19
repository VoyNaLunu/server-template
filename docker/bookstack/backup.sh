#!/bin/bash
if [ ! -f .env ]; then
    echo ".env doesn't exist" && exit 1
fi
export $(cat .env | xargs) > /dev/null 2>&1
db=$(docker ps -qaf name=bookstack-mysql)
timestamp=$(date '+%Y-%m-%d_%H-%M-%S')

if [ ! -d /srv/backup/bookstack/bookstack-backup_${timestamp} ]; then
    mkdir -p /srv/backup/bookstack/bookstack-backup_${timestamp}
fi

cp .env /srv/backup/bookstack/bookstack-backup_${timestamp}/.env
docker exec ${db} mysqldump -u root --password=${MYSQL_ROOT_PASSWORD} ${MYSQL_DATABASE} > /srv/backup/bookstack/bookstack-backup_${timestamp}/bookstack-dump.sql
cp -r /var/lib/docker/volumes/bookstack_mysql-data /srv/backup/bookstack/bookstack-backup_${timestamp}/
cp -r /var/lib/docker/volumes/bookstack_storage-uploads /srv/backup/bookstack/bookstack-backup_${timestamp}/
cp -r /var/lib/docker/volumes/bookstack_uploads /srv/backup/bookstack/bookstack-backup_${timestamp}/
tar -czf /srv/backup/bookstack/bookstack-backup_${timestamp}.tar.gz /srv/backup/bookstack/bookstack-backup_${timestamp} >/dev/null 2>&1
rm -r /srv/backup/bookstack/bookstack-backup_${timestamp}