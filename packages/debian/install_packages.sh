#!/bin/bash
if [ -z $1 ]
then
    echo "please specify file with list of packages" && exit 1
fi
if [ -f $1 ]
then
    apt update && apt install -y $(cat $1)
else
    echo -e "Error: file does not exist: ${1}" && exit 1
fi