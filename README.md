# Projek_PBW-SIPEPE

## Deskripsi

Projek_PBW-SIPEPE adalah website Sistem Informasi Pengelolaan Penelitian yang dibuat menggunakan framework Laravel. Website ini digunakan untuk membantu pengelolaan penelitian pada suatu lembaga atau instansi.

## Anggota Tim

- Alifan
- Ar-rayyan
- Arief
- Ghufran
- Ivan
- Muatta

## Cara Penggunaan

1. Clone repository ini ke dalam folder local Anda
2. Jalankan perintah `composer install` pada folder root projek
3. Buat file `.env` baru dengan menyalin isi dari file `.env.example` dan sesuaikan konfigurasinya
4. Jalankan perintah `php artisan key:generate` untuk menghasilkan key baru
5. Buat database kosong pada MySQL Server dan sesuaikan konfigurasi database pada file `.env`
6. Jalankan perintah `php artisan migrate` untuk menjalankan migrasi tabel ke database
7. Jalankan perintah `php artisan db:seed` untuk mengisi data awal ke dalam tabel
8. Jalankan perintah `php artisan serve` untuk menjalankan aplikasi
9. Buka browser dan akses `localhost:8000` untuk melihat website.
