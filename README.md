# Sistem Manajemen Toko Sepatu

Aplikasi web berbasis Laravel untuk mengelola kategori sepatu, data produk sepatu, data pelanggan, dan pencatatan pesanan toko.

## Anggota Kelompok
- **Ariel** — Setup Laravel & GitHub, Layout Bootstrap 5, Authentication, CRUD Kategori Sepatu, Setup Docker & Deployment, Dokumentasi
- **Zulfa** — Migration & Relasi Eloquent (Sepatu, Pelanggan, Pesanan), CRUD Produk Sepatu, Pelanggan, & Pesanan, Validasi & Seeder

## Fitur Utama
- Login & Register (Authentication) dengan proteksi middleware `auth` dan CSRF
- Dashboard ringkasan data toko
- Manajemen Kategori Sepatu (CRUD + Validasi)
- Manajemen Produk Sepatu (CRUD dengan relasi Kategori)
- Manajemen Data Pelanggan (CRUD)
- Manajemen Transaksi Pesanan (CRUD dengan relasi Pelanggan, Sepatu, & Admin)

## Teknologi yang Digunakan
- PHP & Laravel
- MySQL
- Bootstrap 5 & Blade Template
- Docker (untuk deployment)

## Cara Menjalankan Aplikasi di Lokal
1. Clone repository:
   ```bash
   git clone [https://github.com/rielcuy/project-PTI.git](https://github.com/rielcuy/project-PTI.git)
   cd toko-sepatu