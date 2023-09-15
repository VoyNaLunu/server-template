# iptables

### Description

netfilter configuration interface.

### Installation

```bash
sudo apt install -y iptables iptables-persistent
```

### Configuration
> :warning: Manage chains only through the file so there isn't any conflicts in rules and changes are present in the repo

1. Create symbolic link to the rules file:  
```bash
sudo ln -s /path/to/repo/iptables/rules.v4 /etc/iptables/rules.v4
```
2. Load the rules:
```bash
sudo iptables-restore -n /etc/iptables/rules.v4
```
> By default iptables-restore flushes all the rules, including Docker managed ones,
> ```-n``` argument allows to avoid that, but before making any changes to a chain it must be flushed
> using ```-F``` key to avoid any conflicts in the rules, for example:  
> ```-F INPUT```

> To create rules for containers they must be put into DOCKER-USER chain,
> more about that:
> [Official Docker documentation](https://docs.docker.com/network/packet-filtering-firewalls/)  
> [Docker meet firewall - finally an answer](https://unrouted.io/2017/08/15/docker-firewall/)  
> Example of DOCKER-USER:
> ```bash
> -F DOCKER-USER
> -A DOCKER-USER -m conntrack --ctstate ESTABLISHED,RELATED -j ACCEPT
> -A DOCKER-USER -p tcp -m tcp -m conntrack --ctorigdstport 80 -j ACCEPT
> -A DOCKER-USER -p tcp -m tcp -m conntrack --ctorigdstport 25 -j DROP
> ```