#!/bin/bash

usage=$(top -bn 1 -i -c)

echo "$usage" > "/share/usage3.txt";
