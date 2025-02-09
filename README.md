<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Rancang Bangun Inventaris Barang

## Deskripsi
Aplikasi berbasis website untuk mengelola inventaris barang di Dinas Kominfo Kabupaten Rokan Hulu.

## Fitur
- Antarmuka Pengguna Sederhana: Antarmuka pengguna yang mudah digunakan dengan tampilan yang responsif.
- CRUD (Create, Read, Update, Delete) Dalam Inventaris barang, dan pengelolaan pegawai sebagai penanggung jawab barang.
- Relasi Antara Penanggung Jawab Barang dengan Barang


## Teknologi yang Digunakan
- Laravel 11
- Xampp 
- MySQL
- Bootstrap

## Instalasi
### 1. Clone Repository
```bash
git clone https://github.com/username/repository-name.git
cd repository-name

### 2. Instal Dependensi
```bash
composer install
npm install

### 3. Konfigurasi Environment
- Edit .env untuk mengatur database.
- DB_CONNECTION=mysql
- DB_DATABASE=db_inventory

### 4. Migrasi Database
```bash
php artisan migrate --seed

### 5. Menjalankan Aplikasi
php artisan serve
Akses aplikasi di [http://127.0.0.1:8000].

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
