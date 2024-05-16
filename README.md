## VegieAja - Katalog Sayur untuk Agen Terdaftar

**VegieAja** adalah sebuah aplikasi web yang dirancang untuk memudahkan agen terdaftar dalam melakukan pemesanan dan penjualan sayur-sayuran kepada end user. Aplikasi ini berfungsi sebagai katalog sayur yang memungkinkan agen untuk dengan mudah mengakses informasi produk, melakukan pemesanan, dan mengelola transaksi mereka.

### Fitur Utama
- **Landing Page**:
  - Berfungsi sebagai katalog sayur untuk agen.
  - Menampilkan produk sayur yang tersedia dengan deskripsi dan harga.
  - Desain responsif dan user-friendly.

- **Admin Panel**:
  - **Pencatatan Order**: Mengelola dan memantau semua pesanan yang masuk.
  - **Manajemen Agen**: Menambah, mengedit, dan menghapus data agen terdaftar.
  - **Manajemen Produk**: Mengelola katalog produk sayur, termasuk penambahan produk baru, pengeditan detail produk, dan penghapusan produk.

### Teknologi yang Digunakan
- **Framework**: Laravel 10.8
- **Template**: Ogani

### Tentang Proyek
- **VegieAja** merupakan proyek pertama yang saya kerjakan menggunakan framework laravel.
- Menggunakan **Laravel 10.8**, framework PHP yang kuat dan fleksibel untuk pengembangan aplikasi web.
- Template website menggunakan **Ogani**, yang memberikan memiliki lisensi MIT.
- Terdapat dua jenis tampilan utama dalam aplikasi ini: **Landing Page** untuk katalog dan **Admin Panel** untuk pengelolaan internal.

### Persyaratan
- **PHP**: Versi 8.1 atau yang lebih baru.
- **Laravel**: Versi 10.8 atau yang lebih baru.
- **Node.js**: Untuk manajemen paket JavaScript.
- **Composer**: Untuk manajemen paket PHP.

### Cara Menggunakan
1. **Instalasi**:
   - Clone repositori ini ke dalam direktori lokal Anda.
   - Jalankan `composer install` untuk menginstal dependensi Laravel.
   - Jalankan `npm install` untuk menginstal dependensi JavaScript.
   - Copy `.env.example` menjadi `.env` dan konfigurasi database Anda.
   - Buat database baru di phpMyAdmin dan impor file `vegieaja(1).sql` yang terdapat di dalam folder proyek ini.
   - Sesuaikan pengaturan database di file `.env` Anda dengan informasi database baru yang telah dibuat.
   - Jalankan `php artisan migrate` untuk migrasi database.
   - Jalankan `npm run dev` untuk mengkompilasi JavaScript.
   - Jalankan `php artisan serve` untuk memulai aplikasi.

2. **Akses**:
   - Buka `http://localhost:8000` untuk mengakses landing page.
   - Buka `http://localhost:8000/admin` untuk mengakses admin panel (login diperlukan).

Kami berharap **VegieAja** dapat membantu agen sayur dalam mengelola pesanan dan meningkatkan efisiensi bisnis mereka. Kami sangat menghargai masukan dan saran Anda untuk pengembangan lebih lanjut.

### Lisensi
Aplikasi ini dilisensikan di bawah [MIT License](LICENSE).

---

Silakan kunjungi repositori ini untuk informasi lebih lanjut dan cara kontribusi. Terima kasih atas dukungannya!
