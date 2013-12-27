#!/bin/sh

git pull origin master;
git add .;
git commit -a -m"Update";
git push origin master;
