cara pert 5:

- mkdir pert 5
- masuk pert 5 docker compose start
- copy db,nginx, php, .env, docker compose.yml
- docker compose up-d --build 
- docker exec -it pemweb bash
- composer create-project --prefer-dist raugadh/fila-starter .
- ubah .env
- php artisan key:generate
- php artisan storage:link
- php artisan migrate
- chown -R www-data:www-data storage/*
- chown -R www-data:www-data bootstrap/*
- php artisan project:init
- php artisan make:model Client -ms
- php artisan make:model Product -ms
- php artisan make:controller Api/ProductApiController
- php artisan make:middleware ClientAuth
- php artisan route:list
- php artisan make:filament-resource Client --generate
- php artisan make:filament-resource Product --generate
- php artisan migrate
- php artisan migrate:fresh (kalo nothing to migrate baru pake migrate:fresh)
- php artisan project:init

