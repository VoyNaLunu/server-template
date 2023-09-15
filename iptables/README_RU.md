# iptables

### Описание

Интерфейс управления netfilter

### Установка

```bash
sudo apt install -y iptables iptables-persistent
```

### Настройка

> :warning: Управлять цепочками следует только через файл  чтобы не создавать конфликтов в правилах и сохранять изменения в репозитории  

1. Сделать символическую ссылку на правила из репозитория:  
```bash
sudo ln -s /путь/к/репозиторию/iptables/rules.v4 /etc/iptables/rules.v4
```
2. Загрузить правила в iptables:
```bash
sudo iptables-restore -n /etc/iptables/rules.v4
```
> По умолчанию iptables-restore стирает все правила, включая созданные Docker,  
> опция ```-n``` используется чтобы избежать этого, но перед применением правил нужно  
> cбрасывать изменяемую цепочку с помощью ключа ```-F```, чтобы избежать конфликты, например:  
> ```-F INPUT```

> Если требуется добавить правила для Докера,  
> то нужно добавлять их в DOCKER-USER цепочку,  
> подробнее  
> [Официальная документация Docker](https://docs.docker.com/network/packet-filtering-firewalls/)    
> [Docker meet firewall - finally an answer](https://unrouted.io/2017/08/15/docker-firewall/)  
> Пример DOCKER-USER:  
> ```bash
> -F DOCKER-USER
> -A DOCKER-USER -m conntrack --ctstate ESTABLISHED,RELATED -j ACCEPT
> -A DOCKER-USER -p tcp -m tcp -m conntrack --ctorigdstport 80 -j ACCEPT
> -A DOCKER-USER -p tcp -m tcp -m conntrack --ctorigdstport 25 -j DROP
> ```