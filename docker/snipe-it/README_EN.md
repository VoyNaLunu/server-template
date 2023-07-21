# Snipe IT

## Description  
IT asset management system  
more about it:  
https://snipeitapp.com/  
https://snipe-it.readme.io/docs/docker  


## Instructions

1. Go to Snipe IT folder  
```bash
cd docker/snipe-it
```

2. Copy example for .env, change and fill variables as needed  
```bash
cp .env.example .env
```
3. Change path to certificate folder in `docker-compose.yml`  

4. Start the containers  
```bash
docker compose up -d
```
