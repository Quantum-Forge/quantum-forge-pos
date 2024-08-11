<?php

return [
    'create_user' => [
        'name' => 'Nama',
        'email' => 'Email',
        'password' => 'Kata Sandi',
        'confirm_password' => 'Konfirmasi Kata Sandi',
        'role' => 'Peran',
        'select_role' => 'Pilih Peran',
        'select_status' => 'Pilih Status',
        'profile_image' => 'Gambar Profil',
    ],
    'update_user' => [
        'name' => 'Nama',
        'email' => 'Email',
        'role' => 'Peran',
        'status_opt' => [
            'active' => 'Aktif',
            'deactivate' => 'Nonaktif',
        ],
        'profile_image' => 'Gambar Profil',
        'update_user' => 'Perbarui Pengguna'
        
    ],

    'view_user' => [
        'add_user' => 'Tambah Pengguna',
        'images' => 'Foto',
        'name' => 'Nama',
        'email' => 'Email',
        'role' => 'Peran',
        'status_opt' => [
            'active' => 'Aktif',
            'deactivate' => 'Nonaktif',
        ],
       'action' => 'Aksi'
    ],
    
    'role_create' => [
        'create_role' => 'Buat Peran',
        'update_role' => 'Perbarui Peran',
        'role_name' => 'Nama Peran',
        'permission' => [
            'permissions' => 'Izin',
            'give_all_permission' => 'Berikan Semua Izin',
            'dashboard' => [
                'total_stats' => 'Statistik Total',
                'notifications' => 'Notifikasi',
                'month_overview' => 'Ikhtisar Bulanan',
                'weekly_sales_purchases' => 'Penjualan & Pembelian Mingguan',
                'monthly_cashflow' => 'Arus Kas Bulanan',
            ],
            'user_management' => [
                'access' => 'Akses',
                'own_profile' => 'Profil Sendiri',
            ],
            'products' => [
                'access' => 'Akses',
                'view' => 'Lihat',
                'create' => 'Buat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
                'category' => 'Kategori',
                'print_barcodes' => 'Cetak Barcode',
            ],
            'adjustments' => [
                'access' => 'Akses',
                'view' => 'Lihat',
                'create' => 'Buat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
            ],
            'quotations' => [
                'access' => 'Akses',
                'view' => 'Lihat',
                'create' => 'Buat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
                'send_email' => 'Kirim Email',
                'sale_from_quotation' => 'Penjualan dari Penawaran',
            ],
            'expenses' => [
                'access' => 'Akses',
                'edit' => 'Edit',
                'create' => 'Buat',
                'delete' => 'Hapus',
                'category' => 'Kategori',
            ],
            'customers' => [
                'access' => 'Akses',
                'create' => 'Buat',
                'view' => 'Lihat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
            ],
            'suppliers' => [
                'access' => 'Akses',
                'create' => 'Buat',
                'view' => 'Lihat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
            ],
            'sales' => [
                'access' => 'Akses',
                'view' => 'Lihat',
                'create' => 'Buat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
                'payments' => 'Pembayaran',
                'pos_system' => 'Sistem POS',
            ],
            'sales_return' => [
                'access' => 'Akses',
                'view' => 'Lihat',
                'create' => 'Buat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
                'payments' => 'Pembayaran',
            ],
            'purchases' => [
                'access' => 'Akses',
                'view' => 'Lihat',
                'create' => 'Buat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
                'payments' => 'Pembayaran',
            ],
            'purchase_return' => [
                'access' => 'Akses',
                'view' => 'Lihat',
                'create' => 'Buat',
                'edit' => 'Edit',
                'delete' => 'Hapus',
                'payments' => 'Pembayaran',
            ],
            'currencies' => [
                'access' => 'Akses',
                'create' => 'Buat',
                'delete' => 'Hapus',
            ],
            'reports' => [
                'access' => 'Akses',
            ],
            'settings' => [
                'access' => 'Akses',
            ],
        ],
    ],

    'role_view' => [
        'add_role' => 'Tambah Peran',
        'name' => 'Nama',
        'permission' => 'Izin',
       'action' => 'Aksi'
    ],

];
