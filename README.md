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

### Installation of `wkhtmltopdf` on Windows and Linux

#### Windows Installation

1. **Download `wkhtmltopdf`**:
   - Visit the [wkhtmltopdf downloads page](https://wkhtmltopdf.org/downloads.html).
   - Download the Windows version of `wkhtmltopdf`.

2. **Install `wkhtmltopdf`**:
   - Run the installer and follow the installation steps.
   - By default, it should be installed to `C:\wkhtmltopdf`.

3. **Verify Installation**:
   - Open Command Prompt.
   - Run the command:
     ```sh
     "C:\wkhtmltopdf\bin\wkhtmltopdf.exe" --version
     ```
   - You should see the version information of `wkhtmltopdf`.

4. **Add to System Path (Optional but recommended)**:
   - Open System Properties (Right-click on My Computer -> Properties).
   - Go to Advanced system settings.
   - Click on Environment Variables.
   - In the System variables section, find the `Path` variable and click Edit.
   - Add the path `C:\wkhtmltopdf\bin` to the list of paths.
   - Click OK to close all dialog boxes.

   This allows you to run `wkhtmltopdf` from any Command Prompt without specifying the full path.

#### Linux Installation

1. **Download `wkhtmltopdf`**:
   - You can download the precompiled binaries for Linux from the [wkhtmltopdf downloads page](https://wkhtmltopdf.org/downloads.html).

2. **Install `wkhtmltopdf`**:
   - For Debian-based systems (like Ubuntu):
     ```sh
     sudo apt-get update
     sudo apt-get install -y wkhtmltopdf
     ```

   - For Red Hat-based systems (like CentOS):
     ```sh
     sudo yum install -y wkhtmltopdf
     ```

3. **Verify Installation**:
   - Open Terminal.
   - Run the command:
     ```sh
     wkhtmltopdf --version
     ```
   - You should see the version information of `wkhtmltopdf`.

4. **Download and Install Precompiled Binaries**:
   - Download the precompiled binaries from the [wkhtmltopdf GitHub releases page](https://github.com/wkhtmltopdf/packaging/releases).
   - Extract the tarball:
     ```sh
     tar -xvzf wkhtmltox-<version>_linux-generic-amd64.tar.xz
     ```
   - Move the binaries to `/usr/local/bin`:
     ```sh
     sudo mv wkhtmltox/bin/wkhtmltopdf /usr/local/bin/wkhtmltopdf
     sudo mv wkhtmltox/bin/wkhtmltoimage /usr/local/bin/wkhtmltoimage
     ```

   - Verify the installation by running:
     ```sh
     wkhtmltopdf --version
     ```

### Using `wkhtmltopdf` in Laravel

#### Windows Configuration

1. **Set the Binary Path** in `config/snappy.php`:
   ```php
   'pdf' => [
       'enabled' => true,
       'binary'  => '"C:\wkhtmltopdf\bin\wkhtmltopdf.exe"',
       'timeout' => false,
       'options' => [],
       'env'     => [],
   ],
   ```

#### Linux Configuration

1. **Set the Binary Path** in `config/snappy.php`:
   ```php
   'pdf' => [
       'enabled' => true,
       'binary'  => '/usr/local/bin/wkhtmltopdf',
       'timeout' => false,
       'options' => [],
       'env'     => [],
   ],
   ```

2. **Update `.env`** (optional):
   ```env
   WKHTMLTOPDF_BINARY=/usr/local/bin/wkhtmltopdf
   ```



