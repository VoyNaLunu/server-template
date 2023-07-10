# Шаблон сервера

Репозиторий используется для быстрого развёртывания нового сервера вручную или с помощью Ansible

## Первоначальная конфигурация

### Установить пакеты:  
1. Вручную
```bash
sudo apt install \
htop \
tcpdump \
pwgen \
ncdu \
fail2ban \
iptables \
iptables-persistent \
git \
openssh-server \
rsync
```
2. Используя скрипт
```bash
cd packages/debian  
./install_packages.sh package_list.txt
```

### Добавить swap (необязательно):
1. Вручную
```bash
fallocate -l 2G /swapfile
chmod 600 /swapfile
mkswap /swapfile
swapon /swapfile
echo "/swapfile swap swap defaults 0 0" >> /etc/fstab
```

2. Используя скрипт
```bash
cd misc/
./add_swap.sh 2G
```
### Iptables
1. Добавить символическую ссылку на правила iptables
```bash
ln -s /path/to/repo/iptables/rules.v4 /etc/iptables/rules.v4
```
2. Загрузить добавленные правила
```bash
sudo iptables-restore < /etc/iptables/rules.v4
```

### Fail2Ban

1. Добавить символическую ссылку на fail2ban конфигурацию
```bash
ln -s /path/to/repo/fail2ban/custom.conf /etc/fail2ban/jail.d/custom.conf
```
2. Перезапустить fail2ban
```bash
sudo systemctl restart fail2ban
```
3. Добавить fail2ban в автозагрузку
```bash
sudo systemctl enable fail2ban
```
4. Проверить fail2ban
```bash
fail2ban-client status sshd
fail2ban-client status recidive
```

## Докеризированный реверсивный прокси на Nginx

[Инструкции](docker/reverse-proxy/README.md)