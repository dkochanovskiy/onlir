Инструкция по разворачиванию проекта Onlir

1. Запускаем PhpStorm
2.  
 
2. Клонируем репозиторий
 - git clone https://github.com/dkochanovskiy/onlir.git
 
4. 
отредактировать файл docker-compose.yml
отредактировать файл .env
отредактировать конфиги
composer install
chmod 777 -R /Users/den/www/onlir/storage
docker-compose build
docker-compose up -d
проверить все ли контейнеры запустились docker ps
входим в контейнер docker exec -it onlir_fpm_1 bash
переходим в папку с проектом cd ../onlir
накатываем миграции php artisan migrate

npm install