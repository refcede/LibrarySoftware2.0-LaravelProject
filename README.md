# 🚀 SoftLibrary 2.0 (Web Based Application)

**SoftLibrary** (sebelumnya Cibay Software) adalah portal arsip digital terpusat yang dirancang untuk mempermudah mahasiswa mendapatkan perangkat lunak pemrograman, instalasi *environment*, dan modul materi perkuliahan. 

Pada versi 2.0 ini, sistem telah di-*upgrade* secara menyeluruh menjadi aplikasi web dinamis berbasis **Laravel**. Peningkatan ini memungkinkan pengelolaan data *software* yang lebih terstruktur melalui *database*, pencarian yang lebih cepat, dan pembaruan tautan yang lebih efisien tanpa harus mengubah kode sumber (*source code*) secara manual.

🌐 **Live Website:** [softlibrary.great-site.net](https://softlibrary.great-site.net/)

## ✨ Fitur Unggulan

Peralihan ke kerangka kerja Laravel membawa berbagai fitur baru yang membuat portal ini lebih interaktif:
* **Dynamic Data Management:** Semua tautan unduhan *software* dan modul kini dikelola melalui *database* (MySQL), sehingga daftar aplikasi selalu *up-to-date*.
* **Smart Categorization:** Perangkat lunak dikelompokkan secara logis (misalnya: *Java Environment, Web Development Tools, Database Management, Academic Tools*) agar mudah ditemukan.
* **Direct & Clean Links:** Tetap mempertahankan komitmen utama: menyediakan tautan unduhan langsung (Google Drive/MediaFire) tanpa *link shortener* yang dipenuhi iklan.
* **Responsive UI:** Antarmuka yang rapi dan dapat diakses dengan nyaman baik melalui laptop maupun perangkat seluler.
* **Animasi Pop up:** Memberikan animasi pop up ketika download, atau melaporkan link mati agar website terlihat interaktif

## 📚 Kategori Arsip Tersedia

1.  **Development Environments:** JDK, XAMPP, MySQL Server.
2.  **IDE & Code Editors:** Apache NetBeans, VS Code, Dev C++, Python.
3.  **Academic Specific Tools:** Cisco Packet Tracer, SPSS, Visual Paradigm.
4.  **Refreshment:** *Game* ringan untuk hiburan pelepas penat.

## 🛠️ Tech Stack & Architecture

Proyek ini dibangun menggunakan arsitektur MVC (*Model-View-Controller*):
* **Backend Framework:** Laravel 
* **Database:** MySQL
* **Frontend:** HTML5, CSS3, Blade Templating Engine
* **Hosting:** InfinityFree / Great-Site (Web Server & Database)

## 💻 Panduan Instalasi Lokal (Untuk Developer)

Jika ingin menjalankan *project* ini di komputer lokal (*localhost*):

### 1. Clone Repositori
```bash
git clone [https://github.com/refcede/LibrarySoftware2.0-LaravelProject.git](https://github.com/refcede/LibrarySoftware2.0-LaravelProject.git)
cd LibrarySoftware2.0-LaravelProject
```
### 2. Instal Dependensi
```
Pastikan kamu sudah menginstal PHP, Composer, dan Node.js di komputermu.
```
```bash
composer install
npm install
```
### 3. Konfigurasi Environment Salin file .env.example menjadi .env lalu hasilkan key aplikasi.
```bash
cp .env.example .env
php artisan key:generate
```
### 4. Jalankan Migrasi Database
```bash
php artisan migrate
```
### 5. Jalankan Server Lokal
```bash
php artisan serve
```
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
