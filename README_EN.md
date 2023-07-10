# Server Template

Repository used to quickstart a new server manually or using Ansible

## Initial configuration

### Install packages:  
1. Manually
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
2. Using script
```bash
cd packages/debian  
./install_packages.sh package_list.txt
```

### Add swap (optional):
1. Manually
```bash
fallocate -l 2G /swapfile
chmod 600 /swapfile
mkswap /swapfile
swapon /swapfile
echo "/swapfile swap swap defaults 0 0" >> /etc/fstab
```

2. Using script
```bash
cd misc/
./add_swap.sh 2G
```
### Iptables
1. Add a symlink to iptables rules
```bash
ln -s /path/to/repo/iptables/rules.v4 /etc/iptables/rules.v4
```
2. Load added rules
```bash
sudo iptables-restore < /etc/iptables/rules.v4
```

### Fail2Ban

1. Add a symlink to custom fail2ban config
```bash
ln -s /path/to/repo/fail2ban/custom.conf /etc/fail2ban/jail.d/custom.conf
```
2. Restart fail2ban
```bash
sudo systemctl restart fail2ban
```
3. Add fail2ban to autostart
```bash
sudo systemctl enable fail2ban
```
4. Check fail2ban
```bash
fail2ban-client status sshd
fail2ban-client status recidive
```

## Dockerized Nginx reverse proxy

[Instructions](docker/reverse-proxy/README.md)