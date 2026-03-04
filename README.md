# 📚 Sistem Informasi Perpustakaan - Laravel

Aplikasi Sistem Informasi Perpustakaan berbasis Laravel.  
Project ini dibuat sebagai media pembelajaran untuk memahami:

- Migration
- Relasi Database
- CRUD
- Upload Gambar
- Authentication
- Dashboard Admin
- Tailwind CSS

---

## 🛠️ Persyaratan Sistem

Pastikan sudah menginstall:

- PHP >= 8.1  
- Composer  
- MySQL  
- Git  
- Node.js & NPM (untuk Tailwind)  
- Laragon / MAMP / XAMPP  

---

## 🚀 Cara Install Project

### 1️⃣ Clone Repository
```bash
git clone https://github.com/DionAhza/E-Library-app
cd e-library
```

```bash
cd e-library-app
```

### 2️⃣ Install Dependency Laravel
```bash
composer install
```

### 3️⃣ Install Dependency Frontend (Tailwind)
```bash
npm install
```

### 4️⃣ Copy File Environment
Linux / Mac:
```bash
cp .env.example .env
```

Windows:
```bash
copy .env.example .env
```

### 5️⃣ Generate App Key
```bash
php artisan key:generate
```

### 6️⃣ Atur Database di File `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=belajar_perpus_db
DB_USERNAME=root
DB_PASSWORD=
```

### 7️⃣ Jalankan Migration
```bash
php artisan migrate
```

### 8️⃣ Compile Tailwind
Untuk development:
```bash
npm run dev
```
jka tidak bisa di vscode jalankan di termilan laragon


### 9️⃣ Jalankan Server
```bash
php artisan serve
```

Buka di browser:
```
http://127.0.0.1:8000
```

---

## 🔥 Reset Database (Jika Error)

```bash
php artisan migrate:fresh
```
⚠️ Semua data akan terhapus.

---

## ❗ Jika Terjadi Error

- Pastikan database sudah dibuat  
- Pastikan file `.env` sudah benar  
- Jalankan ulang `composer install`  
- Jalankan ulang `npm install`  
- Jalankan ulang `php artisan key:generate`  

---

✨ Selamat belajar Laravel + Tailwind 🚀
