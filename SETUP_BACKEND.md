# Setup Backend KaryaNusa

1. Buka XAMPP Control Panel.
2. Start `Apache` dan `MySQL`.
3. Buka `http://localhost/phpmyadmin`.
4. Pilih tab `Import`.
5. Import file `database/karyanusa.sql`.
6. Buka website melalui `http://localhost/PJBL_WEB/landing.php`.
7. Klik menu `Admin`, lalu login:

Username:
`admin`

Password:
`admin123`

Dashboard admin ada di `admin.php` dan hanya bisa dibuka setelah login.

Data kerajinan, pengrajin, katalog, ulasan, event, dan pesan kontak tersimpan di database `karyanusa`.
Pesan dari `kontak.php` masuk ke tabel `contact_messages` dan bisa dilihat melalui menu `Pesan Kontak` di dashboard admin.

Jika ingin mengubah koneksi database, edit `includes/db.php`.
