# 📚 Aplikasi Perpustakaan Ponpes Gontor

&#x20;&#x20;

Aplikasi ini dibuat untuk mempermudah petugas perpustakaan Pondok Pesantren Gontor dalam mengelola inventaris data buku secara efisien.

## ✨ Fitur Utama

- 📖 **Manajemen Buku**: Tambah, edit, hapus, dan cari data buku dengan mudah.
- 🏷️ **Kategori Buku**: Pengelompokan buku berdasarkan kategori tertentu.
- 🏫 **Manajemen Anggota**: Data santri dan pengguna perpustakaan.
- ⏳ **Peminjaman & Pengembalian**: Mencatat transaksi peminjaman dan pengembalian buku.
- 📊 **Laporan**: Statistik buku yang dipinjam, dikembalikan, dan stok tersedia.

## 🚀 Teknologi yang Digunakan

- **Backend**: Laravel 10
- **Frontend**: Bootstrap 5
- **Database**: MySQL
- **Autentikasi**: Laravel Breeze (dapat disesuaikan dengan Sanctum atau Jetstream)

## 🛠️ Instalasi

1. **Clone repository ini**

   ```bash
   git clone https://github.com/Platotel3s/library.git
   cd repo-perpustakaan
   ```

2. **Install dependency**

   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Sesuaikan konfigurasi database di dalam file `.env`.

4. **Migrasi dan Seed Database**

   ```bash
   php artisan migrate --seed
   ```

5. **Jalankan Aplikasi**

   ```bash
   php artisan serve
   ```

   Akses aplikasi melalui: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## 📷 Tampilan Aplikasi



## 🤝 Kontribusi

Jika ingin berkontribusi, silakan buat *Pull Request* atau ajukan *Issue* untuk perbaikan fitur.

## 📜 Lisensi

Aplikasi ini menggunakan lisensi **MIT License**.

---

✉️ **Hubungi Pengembang**: [yudhaplatol@gmail.com](mailto\:yudhaplato@gmail.com)

