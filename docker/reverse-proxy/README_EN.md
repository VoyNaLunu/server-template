# Nginx Reverse Proxy

## Description
Basic reverse proxy using Nginx  

## Instructions

1. Go to reverse proxy folder
```bash
cd docker/reverse-proxy
```

2. Request certificate using reqcrt.sh script
```bash
./reqcrt.sh "www.example.com,example.com" admin@example.com
```
or manually using this command
```bash
docker compose run --rm  certbot certonly --webroot --webroot-path /var/www/certbot/ -d www.example.com,example.com -m admin@example.com
```
> :warning: if you are requesting certificate manually you have to disable HTTPS configurations first so Nginx doesn't fail to start without certificates and generate DH parametres using this command: `openssl dhparam -out certbot/conf/dhparam.pem 2048`      

3. Start Nginx
```bash
docker compose up -d nginx
```

4. Add renewcrt.sh to crontab for automatic certificate renewal