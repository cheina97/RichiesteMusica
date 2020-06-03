#!/bin/bash

x=$(curl -s richieste.altervista.org/deletefirstline.php|cut -d ">" -f 2)
echo -e "DATA|ORA|TITOLO|AUTORE|LINK\n$x"|column -t -s "|"