<picture>
    <source srcset="public/images/logo.png"  
            media="(prefers-color-scheme: dark)">
    <img src="public/images/logo-dark.png" alt="App Logo">
</picture>

> **Important Note:** This Project is ready for Production. But use code from production branch only. If you find any bug or have any suggestion please create an Issue.

# Local Installation

- run ``composer install `` 
- run `` npm install ``
- run ``npm run dev``
- copy .env.example to .env
- run `` php artisan key:generate ``
- run `` php artisan make:database ``
- run `` php artisan migrate --seed ``
- run `` php artisan storage:link ``
- run `` php artisan serve ``
- then visit `` http://localhost:8000 or http://127.0.0.1:8000 ``.

# Production Instalation

- run ``composer install `` 
- run `` npm install ``
- run ``npm run build``
- copy .env.example to .env
- run `` php artisan key:generate ``
- run `` php artisan make:database ``
- run `` php artisan migrate --seed ``
- run `` php artisan storage:link ``

> **Important Note:** "Quantum POS" uses Laravel Snappy Package for PDFs. If you are using Linux then no configuration is needed. But in other Operating Systems please refer to [Laravel Snappy Documentation](https://github.com/barryvdh/laravel-snappy).

## QuantumPOS Features

- **Products Management & Barcode Printing**
- **Stock Management**
- **Make Quotation & Send Via Email**
- **Purchase Management**
- **Sale Management**
- **Purchase & Sale Return Management**
- **Expense Management**
- **Customer & Supplier Management**
- **User Management (Roles & Permissions)**
- **Product Multiple Images**
- **Multiple Currency Settings**
- **Unit Settings**
- **System Settings**
- **Reports**

Berikut adalah dokumentasi untuk instalasi `wkhtmltopdf` di sistem operasi Linux dan Windows. Dokumentasi ini mencakup langkah-langkah untuk menginstal dan mengonfigurasi `wkhtmltopdf`, serta memastikan bahwa `wkhtmltopdf` berfungsi dengan baik di kedua lingkungan.

---

## Dokumentasi Instalasi `wkhtmltopdf`

### Instalasi di Linux

1. **Update Paket Sistem**

   Sebelum menginstal `wkhtmltopdf`, pastikan sistem Anda diperbarui:

   ```bash
   sudo apt-get update
   sudo apt-get upgrade
   ```

2. **Install `wkhtmltopdf`**

   Anda dapat menginstal `wkhtmltopdf` menggunakan manajer paket `apt`:

   ```bash
   sudo apt-get install wkhtmltopdf
   ```

   Jika Anda memerlukan versi tertentu atau binary terbaru, ikuti langkah-langkah berikut:

   a. **Unduh Binary dari Situs Resmi**

      Kunjungi [halaman unduhan resmi wkhtmltopdf](https://wkhtmltopdf.org/downloads.html) dan unduh versi terbaru untuk Linux.

   b. **Ekstrak dan Pindahkan Binary**

      Misalkan file yang diunduh adalah `wkhtmltox_0.12.6-1.bionic_amd64.deb`:

      ```bash
      wget https://github.com/wkhtmltopdf/wkhtmltopdf/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.bionic_amd64.deb
      sudo dpkg -i wkhtmltox_0.12.6-1.bionic_amd64.deb
      ```

   c. **Pastikan Binary Bisa Diakses**

      Verifikasi lokasi binary:

      ```bash
      which wkhtmltopdf
      ```

      Biasanya, binary terletak di `/usr/local/bin/wkhtmltopdf`.

3. **Tambahkan Path ke File `.env`**

   Tambahkan path binary ke file `.env` Anda:

   ```env
   WKHTML_PDF_BINARY=/usr/local/bin/wkhtmltopdf
   ```
---

### Instalasi di Windows

1. **Unduh Binary**

   Kunjungi [halaman unduhan resmi wkhtmltopdf](https://wkhtmltopdf.org/downloads.html) dan unduh versi terbaru untuk Windows (misalnya, `wkhtmltox_0.12.6-1_windows-x86_64.exe`).

2. **Install `wkhtmltopdf`**

   a. **Jalankan Installer**

      Jalankan file installer yang diunduh dan ikuti petunjuk untuk menyelesaikan instalasi.

   b. **Verifikasi Instalasi**

      Pastikan `wkhtmltopdf` dapat diakses dari command prompt:

      ```cmd
      wkhtmltopdf --version
      ```

   c. **Catat Lokasi Binary**

      Lokasi default biasanya di `C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe`.

3. **Tambahkan Path ke File `.env`**

   Tambahkan path binary ke file `.env` Anda:

   ```env
   WKHTML_PDF_BINARY=C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe
   ```


