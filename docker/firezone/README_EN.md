# Firezone VPN

## Description
Modified Firezone configuration for use with custom Nginx reverse proxy and mail server, official documentation: https://www.firezone.dev/docs


## Instructions

> :warning: **First prepare server for deploy**: [VPN-Server instructions](../README.md)  
> :warning: **Requires reverse-proxy to be started first**: [reverse-proxy instructions](../reverse-proxy/README.md)  

1. Generate required secrets  
```bash
docker run --rm firezone/firezone bin/gen-env > .env
```

2. change the `VERSION`, `DEFAULT_ADMIN_EMAIL` and `EXTERNAL_URL` variables, copy and modify everything under `#ADDITIONAL` from .env.example

3. Migrate the database  
```bash
docker compose run --rm firezone bin/migrate
```
> :warning: if migration failed just try it again, for some reason i experienced migration failing the first time with version 0.7.32, might be a bug

4. Create admin account  
```bash
docker compose run --rm firezone bin/create-or-reset-admin
```

5. Start Firezone
```bash
docker compose up -d
```

6. Add backup.sh to crontab for automatic backups, example can be found [here](../../misc/crontab)