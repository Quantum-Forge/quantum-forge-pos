<?php

return [
    'create_user' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'role' => 'Role',
        'select_role' => 'Select Role',
        'select_status' => 'Select Status',
        'profile_image' => 'Profile Image',
    ],
    'update_user' => [
        'name' => 'Name',
        'email' => 'Email',
        'role' => 'Role',
        'status_opt' => [
            'active' => 'Active',
            'deactivate' => 'Deactivate',
        ],
        'profile_image' => 'Profile Image',
        'update_user' => 'Update User'
    ],
    'view_user' => [
        'add_user' => 'Add User',
        'images' => 'Photo',
        'name' => 'Name',
        'email' => 'Email',
        'role' => 'Role',
        'status_opt' => [
            'active' => 'Active',
            'deactivate' => 'Inactive',
        ],
        'action' => 'Action'
    ],

    'role_create' => [
        'create_role' => 'Create Role',
        'update_role' => 'Update Role',
        'role_name' => 'Role Name',
        'permission' => [
            'permissions' => 'Permissions',
            'give_all_permission' => 'Give All Permissions',
            'dashboard' => [
                'total_stats' => 'Total Stats',
                'notifications' => 'Notifications',
                'month_overview' => 'Month Overview',
                'weekly_sales_purchases' => 'Weekly Sales & Purchases',
                'monthly_cashflow' => 'Monthly Cashflow',
            ],
            'user_management' => [
                'name' => 'User Management',
                'access' => 'Access',
                'own_profile' => 'Own Profile',
            ],
            'products' => [
                'access' => 'Access',
                'view' => 'View',
                'create' => 'Create',
                'edit' => 'Edit',
                'delete' => 'Delete',
                'category' => 'Category',
                'print_barcodes' => 'Print Barcodes',
            ],
            'adjustments' => [
                'access' => 'Access',
                'view' => 'View',
                'create' => 'Create',
                'edit' => 'Edit',
                'delete' => 'Delete',
            ],
            'quotations' => [
                'access' => 'Access',
                'view' => 'View',
                'create' => 'Create',
                'edit' => 'Edit',
                'delete' => 'Delete',
                'send_email' => 'Send Email',
                'sale_from_quotation' => 'Sale From Quotation',
            ],
            'expenses' => [
                'access' => 'Access',
                'edit' => 'Edit',
                'create' => 'Create',
                'delete' => 'Delete',
                'category' => 'Category',
            ],
            'customers' => [
                'access' => 'Access',
                'create' => 'Create',
                'view' => 'View',
                'edit' => 'Edit',
                'delete' => 'Delete',
            ],
            'suppliers' => [
               'access' => 'Access',
                'create' => 'Create',
                'view' => 'View',
                'edit' => 'Edit',
                'delete' => 'Delete',
            ],
            'sales' => [
                'access' => 'Access',
                'view' => 'View',
                'create' => 'Create',
                'edit' => 'Edit',
                'delete' => 'Delete',
                'payments' => 'Payments',
                'pos_system' => 'POS System',
            ],
            'sales_return' => [
                'access' => 'Access',
                'view' => 'View',
                'create' => 'Create',
                'edit' => 'Edit',
                'delete' => 'Delete',
                'payments' => 'Payments',
            ],
            'purchases' => [
                'access' => 'Access',
                'view' => 'View',
                'create' => 'Create',
                'edit' => 'Edit',
                'delete' => 'Delete',
                'payments' => 'Payments',
            ],
            'purchase_return' => [
                'access' => 'Access',
                'view' => 'View',
                'create' => 'Create',
                'edit' => 'Edit',
                'delete' => 'Delete',
                'payments' => 'Payments',
            ],
            'currencies' => [
                'access' => 'Access',
                'create' => 'Create',
                'delete' => 'Delete',
            ],
            'reports' => [
                'access' => 'Access',
            ],
            'settings' => [
                'access' => 'Access',
            ],
        ],
    ],

    'role_view' => [
        'add_role' => 'Add Role',
        'name' => 'Name',
        'email' => 'Email',
        'action' => 'Action',
    ],




];
