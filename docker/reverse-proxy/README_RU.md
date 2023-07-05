# Nginx Reverse Proxy

## Описание  
Простой реверсивный прокси на Nginx  

## Инструкции

1. Перейдите в папку реверсивного прокси
```bash
cd docker/reverse-proxy
```

2. Запросите сертификат используя reqcrt.sh скрипт
```bash
./reqcrt.sh "www.example.com,example.com" admin@example.com
```
или вручную используя эту команду
```bash
docker compose run --rm  certbot certonly --webroot --webroot-path /var/www/certbot/ -d www.example.com,example.com -m admin@example.com
```
> :warning: если вы запрашиваете сертификат вручную вам нужно сначало отключить файлы конфигурации HTTPS чтобы Nginx смог запуститься без сертификатов и сгенерировать DH параметры используя эту команду: `openssl dhparam -out certbot/conf/dhparam.pem 2048`

3. Запустите Nginx
```bash
docker compose up -d nginx
```

4. Добавьте renewcrt.sh в crontab для автоматического продления сертификатов