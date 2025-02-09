<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

# Rancang Bangun Inventaris Barang

## Deskripsi
Aplikasi berbasis website untuk mengelola inventaris barang di Dinas Kominfo Kabupaten Rokan Hulu. Aplikasi ini menyediakan fitur lengkap untuk mengelola barang, pegawai sebagai penanggung jawab, dan relasi antara data dengan sistem yang terstruktur.

## Fitur
- **Antarmuka Pengguna Sederhana**: UI yang mudah digunakan dan responsif.
- **CRUD**: Tambah, baca, perbarui, dan hapus data inventaris barang serta pengelolaan pegawai.
- **Relasi Database**: Sistem yang mendukung hubungan antar data untuk efisiensi pengelolaan.

## Teknologi yang Digunakan
- Laravel 11
- XAMPP
- MySQL
- Bootstrap

## Instalasi
### 1. Clone Repository
```bash
git clone https://github.com/username/repository-name.git
cd repository-name
```

### 2. Instal Dependensi
```bash
composer install
npm install
```

### 3. Konfigurasi Environment
1. Salin file konfigurasi `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
2. Edit `.env` dan atur konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_inventory
   DB_USERNAME=root
   DB_PASSWORD=
   ```
3. Generate application key:
   ```bash
   php artisan key:generate
   ```

### 4. Migrasi dan Seed Database
```bash
php artisan migrate --seed
```

### 5. Menjalankan Aplikasi
```bash
php artisan serve
```
Akses aplikasi melalui: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---
Jika ada pertanyaan atau ingin berkontribusi, silakan buat **issue** atau **pull request** pada repository ini. 🚀

