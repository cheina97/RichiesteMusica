#!/bin/bash 
echo "DATA|ORA|TITOLO|AUTORE|LINK">richieste.txt
curl -s richieste.altervista.org/richieste.txt 1>>richieste.txt
column richieste.txt -t -s "|"
