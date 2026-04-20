A. Aplikasi Manajemen Data Buku
Aplikasi Data Buku adalah aplikasi web sederhana berbasis Laravel yang digunakan untuk mengelola data buku. Aplikasi ini mendukung fitur CRUD (Create, Read, Update, Delete) sehingga pengguna dapat mengatur data buku dengan mudah.

B. Fitur
 - Menampilkan daftar buku
 - Menambahkan data buku
 - Mengedit data buku
 - Menghapus data buku
 - Menampilkan stok buku

C. Tampilan
Halaman utama menampilkan tombol mulai lalu akan muncul halaman berikutnya dengan tampilan tabel data buku yang berisi:
 - Judul
 - Penulis
 - Penerbit
 - Tahun Terbit
 - Stok
 - Aksi (Edit & Hapus)

D. Teknologi yang Digunakan
 - PHP
 - Laravel
 - MySQL
 - HTML & CSS

E. Instalasi
 1. clone repository: 
git clone https://github.com/nabila242/nabila-taqwani.git
 2.	Masuk ke folder project: 
cd nabila-taqwani
 3.	Install dependency: 
composer install
 4.	Copy file .env: 
copy .env.example .env
 5.	Atur konfigurasi database di .env: 
DB_DATABASE=nabila
DB_USERNAME=root
DB_PASSWORD=
 6.	Generate key: 
php artisan key:generate
 7.	Jalankan migrasi: 
php artisan migrate
 8.	Jalankan server: 
php artisan serve
 9.	Akses di browser: 
http://127.0.0.1:8000/book

F.  Struktur Fitur
•	/book → menampilkan data buku 
•	/book/create → tambah data 
•	/book/1/edit → edit data

G. Author 
Nama : Nabila Taqwani
Nim : 240180016

