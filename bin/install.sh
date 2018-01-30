#!/usr/bin/env bash

set -exu

useradd -u 1000 -m -p a a

usermod -aG a www-data

chown -R a:www-data /var/www/html

apt update
apt install nano
# enable mod-rewrite in apache
cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load

