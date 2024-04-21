# Nama Aplikasi

Deskripsi singkat tentang aplikasi Anda di sini.

## Instalasi

1. **Clone Repository**

    ```bash
    git clone https://github.com/hibatulwafi/laravel-bookingtogo-test.git
    ```

2. **Pindah ke Direktori Proyek**

    ```bash
    cd laravel-bookingtogo-test
    ```

3. **Instal Dependensi PHP Menggunakan Composer**

    Pastikan Anda telah menginstal [Composer](https://getcomposer.org/) di sistem Anda sebelum melanjutkan.

    ```bash
    composer install
    ```

4. **Duplikat Berkas .env**

    Duplikat berkas `.env.example` dan ubah namanya menjadi `.env`.

    ```bash
    cp .env.example .env
    ```

5. **Buat Kunci Aplikasi**

    Jalankan perintah berikut untuk membuat kunci aplikasi baru:

    ```bash
    php artisan key:generate
    ```

## Migrasi dan Seeding Database

1. **Migrasi Database**

    Jalankan migrasi untuk membuat skema basis data:

    ```bash
    php artisan migrate
    ```

2. **Menyemaikan Data**

    Anda dapat menyemaikan data ke dalam database jika Anda telah menyiapkan seeder:

    ```bash
    php artisan db:seed
    ```

## Menjalankan Server

Terakhir, jalankan server lokal Anda:

```bash
php artisan serve
