Инструкция по разворачиванию проекта Onlir

1. Запускаем PhpStorm
2. В пункте Check out from version control выбираем GitHub
3. В git repository url - указываем адрес репозитория https://github.com/dkochanovskiy/onlir.git
4. В parent directory - указываем родительскую директорию для директории с проектом
5. В directory name - указываем имя рабочей директории
6. Прописываем пути в файле docker-compose.yml
7. Задаем переменные окружения в файле .env
8. В папке с проектом подтягиваем зависимости командой composer install
9. Даем права на редактирование директории storage командой chmod 777 -R /Users/den/www/onlir/storage
10. Выполняем сборку контейнеров командой docker-compose build
11. Запускаем контейнеры командой docker-compose up -d
12. Проверяем все ли контейнеры запустились командой docker ps
13. Входим в контейнер fpm командой docker exec -it onlir_fpm_1 bash
14. Внутри контейнера переходим в папку с проектом командой cd ../onlir
15. Накатываем миграции командой php artisan migrate
16. Выполняем команду npm install
17. Выполняем команду npm install cross-env@latest --save-dev
18. Выполняем команду rm -rf node_modules rm package-lock.json yarn.lock npm cache clear --force npm install