### Aplikasi Manajemen Data Buku
Aplikasi Data Buku adalah aplikasi web sederhana berbasis Laravel yang digunakan untuk mengelola data buku. Aplikasi ini mendukung fitur CRUD (Create, Read, Update, Delete) sehingga pengguna dapat mengatur data buku dengan mudah.

### Fitur
 - Menampilkan daftar buku
 - Menambahkan data buku
 - Mengedit data buku
 - Menghapus data buku
 - Menampilkan stok buku

### Tampilan
Halaman utama menampilkan tombol MULAI lalu akan muncul halaman berikutnya dengan tampilan tabel data buku yang berisi:
 - Judul
 - Penulis
 - Penerbit
 - Tahun Terbit
 - Stok
 - Aksi (Edit & Hapus)

### Teknologi yang Digunakan
 - PHP
 - Laravel
 - MySQL
 - HTML & CSS

### Instalasi
 1. clone repository: 
```blash
git clone https://github.com/nabila242/nabila-taqwani.git
```
 2.	Masuk ke folder project:
```blash 
cd nabila-taqwani
```
 3.	Install dependency:
 ```blash    
composer install
```
 4.	Copy file .env: 
```blash
copy .env.example .env
```
 5.	Atur konfigurasi database di .env: 
```blash
DB_DATABASE=nabila
DB_USERNAME=root
DB_PASSWORD=
```
 6.	Generate key: 
```blash
php artisan key:generate
```
 7.	Jalankan migrasi: 
```blash
php artisan migrate
```
 8.	Jalankan server: 
```blash
php artisan serve
```
 9.	Akses di browser: 
```blash
http://127.0.0.1:8000/book
```

### Struktur Fitur
•	/book → menampilkan data buku 
•	/book/create → tambah data 
•	/book/1/edit → edit data

### Author 
Nama : Nabila Taqwani
Nim : 240180016

