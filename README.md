# Latihan Laravel: Daftar Mahasiswa dan Kalkulator Segitiga

Latihan dari Modul Praktikum Framework Laravel.

## Fitur

- /daftar/mahasiswa : menampilkan daftar mahasiswa (MahasiswaController)
- /kalkulator/segitiga : menghitung luas segitiga (KalkulatorController)

## Cara menjalankan

    composer install
    copy .env.example .env
    php artisan key:generate
    php artisan migrate
    php artisan serve

Lalu buka http://127.0.0.1:8000/daftar/mahasiswa