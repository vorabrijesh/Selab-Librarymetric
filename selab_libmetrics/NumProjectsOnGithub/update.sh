#!/bin/bash

cat javascripts.txt | while read line; do
  python3 NumProjGithub.py $line
done

