# FLIXIE
Sebuah aplikasi berbasis website yang menyediakan straming vidio mulai dari movie, anime, kartun, dan masih banyak lagi.

## Getting Started
Preinstallation:
- NodeJS versi > 18
- Visual Studio Code atau Code Editor Lainnya
- PHP v8.2 atau lebih
- MySQL
- Laragon/XAMPP

### Database
1. Buat database dengan nama flixie
2. Import SQL File ke database flixie

#

Copy environment
```bash
cp .env.example .env
```
Jalankan composer
```
composer install
```
Jalankan npm
```
npm install
```
Migrasi tabel
```
php artisan migrate:fresh --seed
```
Jalankan server
```
php artisan serve
```
Run npm dev
```
npm run dev
```
Buka browser dan jalankan

http://127.0.0.1:8000 (sesuai alamat ip yang tertera di php artisan serve)
