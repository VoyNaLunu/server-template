#!/bin/bash
if [ -f /swapfile ]
then
    echo "swap file already exists" && exit 0
fi

fallocate -l 2G /swapfile
chmod 600 /swapfile
mkswap /swapfile
swapon /swapfile
echo "/swapfile swap swap defaults 0 0" >> /etc/fstab