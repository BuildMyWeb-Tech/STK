#!/bin/bash
# Auto-deploy script — runs on server after each git pull via Hostinger hPanel Git

cd /home/u988676778/domains/sussextamilkudumbangal.org/public_html

php artisan config:clear
php artisan view:clear
php artisan route:clear
php artisan cache:clear

echo "Deploy complete."
