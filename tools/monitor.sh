#!/bin/bash

icon="/usr/share/icons/Papirus/64x64/apps/org.gnome.Music.svg"

n=0
n_old=0
while [ true ]; do
    x=$(./visualizza.sh)
    echo "$x"
    n=$(echo "$x"|wc -l)
    if [ $n -gt $n_old ]; then
        mio_beep 3
        zenity --notification --window-icon="$icon" --text "Nuove canzoni"
    fi
    n_old=$n
    sleep 2s
    clear
done
