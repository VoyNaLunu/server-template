# Fail2ban

## Description
Service for blocking brute force attacks.


## Installation

```bash
sudo apt install fail2ban -y
```

## Configuration
1. Make a symlink that points fail2ban to configuration file:  
```bash
sudo ln -s /path/to/repo/fail2ban/jail.d/custom.conf /etc/fail2ban/jail.d/custom.conf
```
2. Restart  
```bash
sudo systemctl restart fail2ban
```
3. Add to startup  
```bash
sudo systemctl enable fail2ban
```
4. Check  
```bash
fail2ban-client status sshd
fail2ban-client status recidive
```