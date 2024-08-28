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

### Setup di hpanel

Berikut adalah langkah-langkah untuk menginstal `wkhtmltopdf` menggunakan file `wkhtmltox-0.12.4_linux-generic-amd64.tar` di shared hosting Anda dengan menggunakan file manager dan kemudian mengonfigurasi variabel lingkungan di file `.env`. Saya akan mengaburkan bagian yang perlu disembunyikan seperti yang diminta.

## **Panduan Instalasi dan Konfigurasi wkhtmltopdf (hPanel)**

### **1. Download dan Extract File `wkhtmltopdf`**

1. **Download File `wkhtmltox`**

   Download file `wkhtmltox-0.12.4_linux-generic-amd64.tar.xz` dari URL berikut:

   ```bash
   wget https://github.com/wkhtmltopdf/wkhtmltopdf/releases/download/0.12.4/wkhtmltox-0.12.4_linux-generic-amd64.tar.xz
   ```

2. **Extract File Menggunakan File Manager**

   - Masuk ke file manager hosting Anda.
   - Upload file `wkhtmltox-0.12.4_linux-generic-amd64.tar.xz` ke direktori yang diinginkan (misalnya, `public_html`).
   - Pilih file tersebut dan gunakan opsi "Extract" atau "Unzip" di file manager Anda untuk mengekstrak file.

3. **Temukan Folder Binary**

   Setelah ekstraksi, pastikan folder `wkhtmltox/bin` berada di lokasi yang benar. Jalur folder mungkin seperti ini:

   ```bash
   /home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf
   ```

   Gantilah `your_username` dan `your_domain.com` dengan informasi yang sesuai.

### **2. Memberikan Izin Eksekusi pada Binary**

1. **Berikan Izin Eksekusi**

   Jika Anda memiliki akses SSH atau terminal, berikan izin eksekusi pada file `wkhtmltopdf` dengan perintah:

   ```bash
   chmod +x /home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf
   ```

2. **Verifikasi Izin**

   Periksa izin file dengan perintah:

   ```bash
   ls -l /home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf
   ```

   Pastikan output menunjukkan bahwa file memiliki izin eksekusi.

### **3. Konfigurasi `.env`**

1. **Edit File `.env`**

   - Buka file `.env` di direktori root proyek Anda menggunakan editor teks di file manager.

   - Tambahkan atau ubah baris berikut untuk menyetel jalur binary `wkhtmltopdf`:

     ```env
     WKHTML_PDF_BINARY='/home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf'
     ```

   - Gantilah `your_username` dan `your_domain.com` dengan informasi yang sesuai.

2. **Simpan Perubahan**

   Simpan perubahan pada file `.env` dan tutup editor.

### **4. Verifikasi Instalasi**

1. **Tes Binary**

   Jalankan binary untuk memverifikasi versinya dengan perintah:

   ```bash
   /home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf --version
   ```

   Pastikan output menunjukkan versi dari `wkhtmltopdf`.

2. **Cek Masalah Jika Ada**

   Jika Anda mendapatkan pesan "Permission denied" atau masalah lainnya:
   - Pastikan Anda memberikan izin eksekusi yang benar.
   - Periksa apakah ada batasan dari penyedia hosting yang mungkin mencegah eksekusi file tertentu.
   - Hubungi dukungan hosting jika perlu.


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


