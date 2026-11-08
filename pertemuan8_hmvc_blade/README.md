# Modul 8 – HMVC, Authorization, dan AJAX (Tahap A–E)

Project latihan mengikuti jurnal Modul 8 Laravel 12. Bagian pengujian Tahap F dan Tugas Praktikum (8.5) tidak disertakan.

## Persiapan
- PHP 8.2+, Composer, MySQL/MariaDB (XAMPP/Laragon)
- Buat database `hmvc_blade` di phpMyAdmin

## Instalasi
1. Ekstrak ZIP, buka terminal di folder project.
2. `composer install`
3. `copy .env.example .env` (Windows) atau `cp .env.example .env` (Linux/Mac), lalu atur DB_DATABASE=hmvc_blade, DB_USERNAME=root, DB_PASSWORD= (kosongkan jika MySQL lokal tidak memakai password)
4. `php artisan key:generate`
5. `composer config allow-plugins.wikimedia/composer-merge-plugin true`
6. `composer require nwidart/laravel-modules`
   (Package `wikimedia/composer-merge-plugin` akan ikut dipasang sebagai dependency.)
7. `php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"`
8. `composer dump-autoload`
9. `php artisan migrate --seed`
10. `php artisan storage:link`
11. `php artisan serve`

Akses `http://127.0.0.1:8000`.

## Akun seed
- Admin: `admin@example.com` / `password`
- User: `user@example.com` / `password`

## Isi latihan
- Tahap A: konfigurasi project, package HMVC, dua modul.
- Tahap B: role enum, authentication manual, dashboard, layout.
- Tahap C: middleware role.
- Tahap D: UserManagement CRUD synchronous khusus admin.
- Tahap E: Pendaftaran CRUD AJAX + upload JPG/JPEG/PNG/PDF maksimal 2 MB.

Catatan: folder `vendor/` sengaja tidak dimasukkan ke ZIP; Composer membuatnya saat `composer install`. Jalankan perintah instalasi sesuai urutan. Jika package modules belum terpasang, perintah Artisan `module:*` belum tersedia.
