#!/bin/bash
set -e
echo "Git Push started ..."
cd /www/htdocs/w01abbc7/command-g.de
git config user.email "elias@commandg.de"
git config user.name "eliasu"

git add -A
git commit -a -m "Updated $(date)"
git push origin main

echo "Git Push completed!"