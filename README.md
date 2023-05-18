# SI2PE (Sistem informasi Pengelolaan Penelitian)
---
## Intoduction
<br>
<p>Ini merupakan projek untuk menyelesaikan Mata Kuliah PBW (Pemrograman Berbasis Web). SI2PE ini merupakan sebuah website untuk membantu dalam mempermudah penyerahan penelitian antara mahasiswa dan dosen sekaligus memberikan informasi terkait penelitian antara dosen yang menerima dan mahasiswa yang menyerahkan.</p>

<p>1. Mahasiswa dapat menyerahkan laporan yang di kerjakan secara online, dan memilih dosen "dosen yang terdaftar sebagai pembimbing".
2. Membantu dosen dalam melakukan pengecekan hasil penelitian yang diserahkan oleh mahasiswa.
</p>
    <p>Jadi dalam projek ini kami berpikir melakukan sebuah hal yang yang biasa dilakukan secara tatap muka dan coba mengubah sistem pertemuannya dengan secara digitalisasi, seperti memanfaatkan sebuah teknologi yang sudah ada di jaman sekarang. Contohnya belanja onlie, pesan makan bisa seacara online dan bahkan pembelajaran sudah bisa di lakukan secara online. Dari hal seperti ini muncul lah ide kami dalam menentukan judul untuk projek ini yaitu membuat sebuah sistem yang untuk penyerahan dan pengecekan penelitian secara online yang kami beri nama (SI2PE), untuk sekarang ini masih berbasis web.</p>
  
## Contibutor
1. Alifan Naufally Atha (2108107010078)
2. Arief Hidayatullah(21081070100 )
3. Arrayan Ramadhani (21081070100 )
4. Ivan Chairi (21081070100 )
5. Muhammad Ghufran (21081070100 )
6. Muatta Muhariq (21081070100 )

# Si2PE


<p> Berikut ini adalah langkah-langkah dalam menjalankan aplikasi ini </p>

<p> 1. Clone repository ini </p>
<pre><code> git clone https://github.com/Ivan027void/practigaldev_final_project </pre></code>

<p> 2. Masuk ke direktori aplikasi </p>
<pre><code> cd pragticaldev_final_project </pre></code>

<p> 3. Install composer </p>
<pre><code> composer install </pre></code>

<p> 4. Buat file .env </p>
<pre><code> cp .env.example .env </pre></code>

<p> 5. Generate key </p>
<pre><code> php artisan key:generate </pre></code>

<p> 6. Buat database baru </p>
<pre><code> create database si2pe </pre></code>

<p> 7. Setting database di file .env </p>
<!-- samakan nama databese anda dengan nama database di file env -->

<p> 8. Migrate database </p>
<pre><code> php artisan migrate:fresh --seed </pre></code>

<p> 9. Install npm </p>
<pre><code> npm install </pre></code>

<p> 11. Jalankan npm dev agar kompilasi css dapat dilakukan </p>
<pre><code>  npm run dev  </pre></code>

<p> 12. Jalankan aplikasi </p>
<pre><code> php artisan serve </pre></code>
