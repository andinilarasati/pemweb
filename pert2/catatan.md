https://getbootstrap.com/docs/5.3/getting-started/introduction/

Catatan Tanggal : Senin, 14 April 2025

membuat halaman website dengan menngunakan Bootstrap dengan link berikut : https://getbootstrap.com/docs/5.3/getting-started/introduction/t

bootstrap digunakan untuk mendesai, membangun tata letak, dan mempercepat resize gambar. menggunakan Bootstrap memudahkan membuat halaman website.

Tujuan Bootstrap adalah membuat situs web yang lebih fungsional dan

pert 3:

buka navicat, tambahkan conection dengan nama pemweb_localhost, port 13306,

dan ketik di comand ketik:

docker exec -it pemweb bash

composer create-project --prefer-dist raugadh/fila-starter .

kalo conection putus di rm -rf .*

chown -R www-data:www-data storage/*

(edit env)

php artisan migrate dan klik yes enter

php artisaan migrate fresh

php artisan db:seed --force

php artisan shield:generate --all (terus enter admin)

chmod 777 -R storage/* && chmod 777 -R bootstrap/*

dan jika ingin tambah opsi di website melalui comand dengan cara:

- php artisan make:livewire ShowProfile
- php artisan make:livewire ShowAbout
- show-about.blade.php
