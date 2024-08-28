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

### **Langkah Instalasi `wkhtmltopdf`**

#### **1. Download dan Extract File**

1. **Download File `wkhtmltox`**

   Jika Anda belum mendownload file tar, Anda bisa melakukannya menggunakan file manager atau melalui SSH (jika tersedia):

   ```bash
   wget https://github.com/wkhtmltopdf/wkhtmltopdf/releases/download/0.12.4/wkhtmltox-0.12.4_linux-generic-amd64.tar.xz
   ```

2. **Extract File di File Manager**

   - Masuk ke file manager hosting Anda.
   - Upload file `wkhtmltox-0.12.4_linux-generic-amd64.tar.xz` ke direktori yang diinginkan (misalnya, `public_html` atau direktori lain).
   - Pilih file tersebut dan gunakan opsi untuk mengekstrak file. Biasanya ada opsi seperti "Extract" atau "Unzip" di file manager Anda.

3. **Temukan Folder Binary**

   Setelah ekstraksi, pastikan folder `wkhtmltox/bin` berada di lokasi yang benar. Misalnya, jika Anda mengekstraknya di `public_html`, jalur folder mungkin akan terlihat seperti ini:

   ```bash
   /home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf
   ```

   Gantilah `your_username` dan `your_domain.com` dengan informasi yang sesuai.

#### **2. Konfigurasi `.env`**

1. **Edit File `.env`**

   - Buka file `.env` di direktori root proyek Anda menggunakan editor teks di file manager.

   - Tambahkan atau ubah baris berikut untuk menyetel jalur binary `wkhtmltopdf`:

     ```env
     WKHTML_PDF_BINARY='/home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf'
     ```

     Gantilah `your_username` dan `your_domain.com` dengan informasi yang sesuai.

2. **Simpan Perubahan**

   Setelah menambahkan baris tersebut, simpan perubahan dan tutup editor.

#### **3. Verifikasi Instalasi**

1. **Tes Binary**

   Jika Anda dapat mengakses terminal SSH atau memiliki opsi untuk menjalankan perintah dari panel kontrol hosting, jalankan perintah berikut untuk memverifikasi bahwa binary `wkhtmltopdf` berfungsi:

   ```bash
   /home/your_username/domains/your_domain.com/public_html/wkhtmltox/bin/wkhtmltopdf --version
   ```

   Pastikan output menunjukkan versi yang benar dari `wkhtmltopdf`.

2. **Gunakan dalam Aplikasi**

   Jika aplikasi Anda menggunakan variabel `WKHTML_PDF_BINARY` yang telah Anda tetapkan di file `.env`, aplikasi harus dapat menggunakan binary `wkhtmltopdf` untuk menghasilkan PDF.

### **Ringkasan Langkah**

1. **Download dan Extract File:**
   - Download `wkhtmltox-0.12.4_linux-generic-amd64.tar.xz`.
   - Extract file menggunakan file manager ke lokasi yang diinginkan.

2. **Konfigurasi `.env`:**
   - Edit file `.env` dan tambahkan variabel `WKHTML_PDF_BINARY` dengan jalur absolute ke binary `wkhtmltopdf`.

3. **Verifikasi Instalasi:**
   - Tes binary dengan perintah langsung untuk memastikan bahwa ia berfungsi.

Dengan langkah-langkah ini, Anda dapat menginstal dan mengkonfigurasi `wkhtmltopdf` pada hosting Anda tanpa akses root, menggunakan file manager dan pengaturan file `.env`.



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


