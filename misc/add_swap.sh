#!/bin/bash
#Usage: add_swap.sh /path/to/swapfile 2G
if [ -f $1 ]
then
    echo "swap file $1 already exists" && exit 0
fi

fallocate -l $2 $1
chmod 600 $1
mkswap $1
swapon $1
echo "$1 swap swap defaults 0 0" >> /etc/fstab