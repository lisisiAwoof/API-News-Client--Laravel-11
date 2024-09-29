<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## API News Client - Laravel 11
Ini adalah sebuah contoh implementasi API external dari [NewsApi](https://newsapi.org/) untuk mengambil dan menampilkan artikel berita di Amerika (US). 

## Fitur
- Mengambil berita teratas (top-headline)
- Mencari artikel berita menggunakan keyword tertentu
- Menyaring artikel berdasarkan beberapa parameter (rentang tanggal, bahasa, nama source domain)
- Menampilkan hasil yang diurutkan berdasarkan popularitas, tanggal publish, relevansi

## Requirements
- Laravel 11
- Guzzle
- Postman
- NewsApi sebagai API external

## SnK
- API Key yang didapatkan setelah login di website NewsApi
- PHP
- Composer

## Endpoints
- GET: https://newsapi.org/v2/top-headlines -> Mendapatkan berita teratas/terbaru
- GET: https://newsapi.org/v2/everything -> Mendapatkan semua berita

## Parameters 
Berikut adalah contoh. Bisa pilih salah satu / beberapa
- q: teknologi
- language: en
- sortBy: popularity

## My Documentation
Berikut adalah Gdocs yang berisi dokumentasi (step-by-step tutorial): [API News Client Gdocs](https://docs.google.com/document/d/1TrLXUsdy0RkuHHEPdBV4uCR-L6h-zEcJ2cp5u5YYuHo/edit?usp=sharing)
Terima kasih 💅🏻✨

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
