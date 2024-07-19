#!/bin/bash

COMMAND="python3 compute.py";

if ps aux | grep -q "$COMMAND"
then
    echo -e "Program in Container 1 is running.\n" > "/share/_status.txt"
else
    echo -e "Program in Container 1 is not running.\n" > "/share/_status.txt"
fi

if ps aux | grep -q "$COMMAND"
then
    echo -e "Program in Container 2 is running.\n" >> "/share/_status.txt"
else
    echo -e "Program in Container 2 is not running.\n" >> "/share/_status.txt"
fi

if ps aux | grep -q "$COMMAND"
then
    echo -e "Program in Container 3 is running.\n" >> "/share/_status.txt"
else
    echo -e "Program in Container 3 is not running.\n" >> "/share_status.txt"
fi
