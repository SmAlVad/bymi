composer install
npm i
cp .env.example .env
php artisan key:generate

chmod -R 777 storage && chmod -R 777 bootstrap/cache
