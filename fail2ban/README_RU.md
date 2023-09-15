# Fail2ban

## Описание
Программа для защиты от брутфорс атак.


## Установка

```bash
sudo apt install fail2ban -y
```

## Конфигурация
1. Добавить символическую ссылку на fail2ban конфигурацию:  
```bash
ln -s /путь/к/репозиторию/fail2ban/jail.d/custom.conf /etc/fail2ban/jail.d/custom.conf
```
2. Перезапустить  
```bash
sudo systemctl restart fail2ban
```
3. Добавить в автозагрузку  
```bash
sudo systemctl enable fail2ban
```
4. Проверить  
```bash
fail2ban-client status sshd
fail2ban-client status recidive
```