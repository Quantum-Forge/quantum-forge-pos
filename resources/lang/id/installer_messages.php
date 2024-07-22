<?php

return [

    /*
     *
     * Terjemahan bersama.
     *
     */
    'title' => 'Quantum POS',
    'next' => 'Langkah Berikutnya',
    'back' => 'Sebelumnya',
    'finish' => 'Instal',
    'forms' => [
        'errorTitle' => 'Kesalahan berikut terjadi:',
    ],

    /*
     *
     * Terjemahan halaman beranda.
     *
     */
    'welcome' => [
        'templateTitle' => 'Selamat Datang',
        'title'   => 'Instal Quantum POS',
        'message' => 'Panduan Instalasi dan Pengaturan yang Mudah.',
        'next'    => 'Periksa Kebutuhan',
    ],

    /*
     *
     * Terjemahan halaman kebutuhan.
     *
     */
    'requirements' => [
        'templateTitle' => 'Langkah 1 | Kebutuhan Server',
        'title' => 'Kebutuhan Server',
        'next'    => 'Periksa Izin',
    ],

    /*
     *
     * Terjemahan halaman izin.
     *
     */
    'permissions' => [
        'templateTitle' => 'Langkah 2 | Izin',
        'title' => 'Izin',
        'next' => 'Konfigurasi Lingkungan',
    ],

    /*
     *
     * Terjemahan halaman lingkungan.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan',
            'title' => 'Pengaturan Lingkungan',
            'desc' => 'Silakan pilih bagaimana Anda ingin mengonfigurasi file <code>.env</code> aplikasi.',
            'wizard-button' => 'Pengaturan Formulir Wizard',
            'classic-button' => 'Editor Teks Klasik',
        ],
        'wizard' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Wizard Terpandu',
            'title' => 'Wizard <code>.env</code> Terpandu',
            'tabs' => [
                'environment' => 'Lingkungan',
                'database' => 'Database',
                'application' => 'Aplikasi',
            ],
            'form' => [
                'name_required' => 'Nama lingkungan diperlukan.',
                'app_name_label' => 'Nama Aplikasi',
                'app_name_placeholder' => 'Nama Aplikasi',
                'app_environment_label' => 'Lingkungan Aplikasi',
                'app_environment_label_local' => 'Lokal',
                'app_environment_label_developement' => 'Pengembangan',
                'app_environment_label_qa' => 'QA',
                'app_environment_label_production' => 'Produksi',
                'app_environment_label_other' => 'Lainnya',
                'app_environment_placeholder_other' => 'Masukkan lingkungan Anda...',
                'app_debug_label' => 'Debug Aplikasi',
                'app_debug_label_true' => 'Benar',
                'app_debug_label_false' => 'Salah',
                'app_log_level_label' => 'Level Log Aplikasi',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'URL Aplikasi',
                'app_url_placeholder' => 'URL Aplikasi',
                'db_connection_failed' => 'Tidak dapat terhubung ke database.',
                'db_connection_label' => 'Koneksi Database',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host Database',
                'db_host_placeholder' => 'Host Database',
                'db_port_label' => 'Port Database',
                'db_port_placeholder' => 'Port Database',
                'db_name_label' => 'Nama Database',
                'db_name_placeholder' => 'Nama Database',
                'db_username_label' => 'Nama Pengguna Database',
                'db_username_placeholder' => 'Nama Pengguna Database',
                'db_password_label' => 'Kata Sandi Database',
                'db_password_placeholder' => 'Kata Sandi Database',

                'app_tabs' => [
                    'more_info' => 'Info Lainnya',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label' => 'Driver Broadcast',
                    'broadcasting_placeholder' => 'Driver Broadcast',
                    'cache_label' => 'Driver Cache',
                    'cache_placeholder' => 'Driver Cache',
                    'session_label' => 'Driver Sesi',
                    'session_placeholder' => 'Driver Sesi',
                    'queue_label' => 'Driver Antrian',
                    'queue_placeholder' => 'Driver Antrian',
                    'redis_label' => 'Driver Redis',
                    'redis_host' => 'Host Redis',
                    'redis_password' => 'Kata Sandi Redis',
                    'redis_port' => 'Port Redis',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Driver Mail',
                    'mail_driver_placeholder' => 'Driver Mail',
                    'mail_host_label' => 'Host Mail',
                    'mail_host_placeholder' => 'Host Mail',
                    'mail_port_label' => 'Port Mail',
                    'mail_port_placeholder' => 'Port Mail',
                    'mail_username_label' => 'Nama Pengguna Mail',
                    'mail_username_placeholder' => 'Nama Pengguna Mail',
                    'mail_password_label' => 'Kata Sandi Mail',
                    'mail_password_placeholder' => 'Kata Sandi Mail',
                    'mail_encryption_label' => 'Enkripsi Mail',
                    'mail_encryption_placeholder' => 'Enkripsi Mail',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'ID Aplikasi Pusher',
                    'pusher_app_id_palceholder' => 'ID Aplikasi Pusher',
                    'pusher_app_key_label' => 'Kunci Aplikasi Pusher',
                    'pusher_app_key_palceholder' => 'Kunci Aplikasi Pusher',
                    'pusher_app_secret_label' => 'Rahasia Aplikasi Pusher',
                    'pusher_app_secret_palceholder' => 'Rahasia Aplikasi Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'Atur Database',
                    'setup_application' => 'Atur Aplikasi',
                    'install' => 'Instal',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Langkah 3 | Pengaturan Lingkungan | Editor Klasik',
            'title' => 'Editor Lingkungan Klasik',
            'save' => 'Simpan .env',
            'back' => 'Gunakan Formulir Wizard',
            'install' => 'Simpan dan Instal',
        ],
        'success' => 'Pengaturan file .env Anda telah disimpan.',
        'errors' => 'Tidak dapat menyimpan file .env, silakan buat secara manual.',
    ],

    'install' => 'Instal',

    /*
     *
     * Terjemahan log terinstal.
     *
     */
    'installed' => [
        'success_log_message' => 'Laravel Installer berhasil DIPASANG pada ',
    ],

    /*
     *
     * Terjemahan halaman akhir.
     *
     */
    'final' => [
        'title' => 'Instalasi Selesai',
        'templateTitle' => 'Instalasi Selesai',
        'finished' => 'Aplikasi telah berhasil dipasang.',
        'migration' => 'Output Console Migrasi &amp; Seed:',
        'console' => 'Output Console Aplikasi:',
        'log' => 'Entri Log Instalasi:',
        'env' => 'File .env Akhir:',
        'exit' => 'Klik di sini untuk keluar',
    ],

    /*
     *
     * Terjemahan khusus pembaruan
     *
     */
    'updater' => [
        /*
         *
         * Terjemahan bersama.
         *
         */
        'title' => 'Pembaruan Laravel',

        /*
         *
         * Terjemahan halaman selamat datang untuk fitur pembaruan.
         *
         */
        'welcome' => [
            'title'   => 'Selamat Datang di Pembaruan',
            'message' => 'Selamat datang di wizard pembaruan.',
        ],

        /*
         *
         * Terjemahan halaman overview untuk fitur pembaruan.
         *
         */
        'overview' => [
            'title'   => 'Ikhtisar',
            'message' => 'Ada 1 pembaruan.|Ada :number pembaruan.',
            'install_updates' => 'Instal Pembaruan',
        ],

        /*
         *
         * Terjemahan halaman akhir.
         *
         */
        'final' => [
            'title' => 'Selesai',
            'finished' => 'Database aplikasi telah berhasil diperbarui.',
            'exit' => 'Klik di sini untuk keluar',
        ],

        'log' => [
            'success_message' => 'Laravel Installer berhasil DIPERBARUI pada ',
        ],
    ],
];
