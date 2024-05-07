#!/bin/bash

help=false
size=1GB
no_args=true
number_re='^[1-9]+(KB|MB|GB|TB|PB|ZB|YB)$'


while getopts hp:s: flag
do
    case "${flag}" in
        p) path=${OPTARG};;
        s) size=${OPTARG};;
        h) help=true;;
        *) help=true;;
    esac
    no_args=false
done

if [ $no_args == true ] || [ $help == true ]
then 
    echo "Usage: ./add_swap.sh [-p <path>][-s <size><KB|MB|GB|TB|PB|ZB|YB>][-h]
    Options:
        -h      This help message
        -p      Path to the swapfile
        -s      Size of swapfile in KB|MB|GB|TB|PB|ZB|YB, defaults to 1GB if no value provided
    " && exit 0
fi

if [ -z ${path:+"x"} ]
then
    echo "No path was provided" && exit 1
fi

if [ -f $path ]
then
    echo "Swap file $path already exists" && exit 1
fi

if ! [[ $size =~ $number_re ]]
then
    echo "Size must be a positive integer and have a size unit, example: 2GB" && exit 1
fi

fallocate -l "${size}" $path
chmod 600 $1path
mkswap $path
swapon $path
echo "$path swap swap defaults 0 0" >> /etc/fstab
