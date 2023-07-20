#!/bin/bash

if [ ! -f .env ]; then
    echo ".env file not found!" && exit 1
fi

export $(cat .env | xargs) >/dev/null 2>&1
db=$(docker ps -qaf name=firezone-postgres)
timestamp=$(date '+%Y-%m-%d_%H-%M-%S')

if [ ! -d /srv/backup/firezone-backup_${timestamp} ]; then
    mkdir -p /srv/backup/firezone-backup_${timestamp}
fi


cp .env /srv/backup/firezone-backup_${timestamp}/.env
cp -r /var/lib/docker/volumes/firezone_postgres-data /srv/backup/firezone-backup_${timestamp}/postgres_volume
cp -r /var/lib/docker/volumes/firezone_firezone-data /srv/backup/firezone-backup_${timestamp}/firezone_volume
docker exec ${db} /bin/bash -c "PGPASSWORD=${DATABASE_PASSWORD} pg_dumpall -U ${DATABASE_USER:-postgres}" > /srv/backup/firezone-backup_${timestamp}/dump.sql
tar -czf /srv/backup/firezone-backup_${timestamp}.tar.gz /srv/backup/firezone-backup_${timestamp}
rm -r /srv/backup/firezone-backup_${timestamp}
