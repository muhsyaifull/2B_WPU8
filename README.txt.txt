1. copy paste .env.case lalu rename menjadi .env
2. buat database di phpmyadmin dengan nama 'proyek' sesuai dengan .env
3. pada vscode jalankan command 'composer install'
4. migarate tabel database dengan menggunakan 'php artisan migrate'
5. gunakan seeder yang sudah di sediakan dengan command 'php artisan db:seed --class=UserSeeder'
6. jalankan dengan command 'php artisan serve'