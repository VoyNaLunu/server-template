# Snipe IT

## Описание  
Система управления IT инвентарём  
more about it:  
https://snipeitapp.com/  
https://snipe-it.readme.io/docs/docker  


## Инструкции

1. Перейдите в папку Snipe IT  
```bash
cd docker/snipe-it
```

2. Скопируйте пример .env, заполните и измените переменные как необходимо  
```bash
cp .env.example .env
```

3. Измените путь к папке с сертификатом в `docker-compose.yml`  

4. Запустите контейнеры  
```bash
docker compose up -d
```
