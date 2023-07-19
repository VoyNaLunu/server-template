# Firezone VPN

## Описание
Измененная конфигурация Firezone для использования с обратным прокси-сервером Nginx и почтовым сервером, официальная документация: https://www.firezone.dev/docs

## Инструкции

> :warning: **Сначала подготовьте сервер для развертывания**: [Инструкции по VPN-серверу](../README.md)  
> :warning: **Требуется предварительный запуск обратного прокси-сервера**: [Инструкции по обратному прокси](../reverse-proxy/README.md)  

1. Сгенерируйте необходимые секреты  
```bash
docker run --rm firezone/firezone bin/gen-env > .env
```

2. Измените переменные `VERSION`, `DEFAULT_ADMIN_EMAIL` и `EXTERNAL_URL`, скопируйте и измените все, что находится под `#ADDITIONAL` в .env.example

3. Мигрируйте базу данных     
```bash
docker compose run --rm firezone bin/migrate
```
> :warning: Если миграция не удалась, просто попробуйте снова; по какой-то причине я столкнулся с ошибкой миграции при первой попытке с версией 0.7.32, возможно, это баг

4. Создайте учетную запись администратора  
```bash
docker compose run --rm firezone bin/create-or-reset-admin
```

5. Запустите Firezone
```bash
docker compose up -d
```

6. Добавьте backup.sh в crontab для автоматических бэкапов, пример можно найти [здесь](../../misc/crontab)