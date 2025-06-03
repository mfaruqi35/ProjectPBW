
### Prerequisites
- PHP 8.1 atau lebih tinggi
- Composer
- Laravel 10 atau lebih tinggi
- MySQL

## Setup Instructions

### Step 1: Clone Reponya
```
git clone https://github.com/arafat-web/Task-Manager.git
cd Task-Manager
```

### Step 2: Install Dependensi
```bash
composer install
```

### Step 3: Konfigurasi Environment Variables
Duplicate the `.env.example` file and rename it to `.env`. Update the following variables:


### Step 4: Membuat Application Key
```bash
php artisan key:generate
```

### Step 5: Jalankan Migrasi dan Seed Database
```bash
php artisan migrate --seed
```

### Step 6: Perintah untuk jalankan server
```bash
php artisan serve
```

Akses aplikasi di browser :  `http://localhost:8000`.


## Panduan

### 1. Task Management
Notudo memungkinkan pengguna untuk mengelola proyek dan tugas secara efisien melalui antarmuka yang ramah pengguna yang mirip dengan ClickUp atau Trello. Berikut adalah fitur-fitur utamanya:

1. **Login admin **
    ```
    Email: admin@example.com
    Password: secret
    ```

2. **Projects:**
   - Buat dan kelola berbagai proyek.
   - Tetapkan tugas ke proyek tertentu agar semuanya tetap teratur.

3. **Tasks:**
   - Tambah, edit, dan hapus tugas dalam sebuah proyek.
   - Gunakan fungsionalitas seret dan lepas (drag-and-drop) untuk memindahkan tugas antar tahapan atau status yang berbeda.

4. **Notes:**
   - Lampirkan catatan ke tugas atau proyek untuk detail dan konteks tambahan.
   - Catat informasi penting yang tidak muat dalam tugas.

5. **Reminders:**
   - Atur pengingat untuk tugas untuk memastikan tenggat waktu terpenuhi.

6. **Routines:**
   - Tentukan tugas rutin yang perlu dilakukan secara teratur.

7. **Files:**
   - Unggah dan lampirkan berkas ke tugas atau proyek.
   - Akses semua dokumen dan sumber daya yang diperlukan dengan mudah di satu tempat.

