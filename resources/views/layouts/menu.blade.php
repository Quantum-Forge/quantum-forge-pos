<li class="c-sidebar-nav-title">Dashboard</li>
<li class="c-sidebar-nav-item {{ request()->routeIs('home') ? 'c-active' : '' }}">
    <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon bi bi-house" style="line-height: 1;"></i> {{ __('sidebar.home') }}
    </a>
</li>

@can('create_pos_sales')
<li class="c-sidebar-nav-item {{ request()->routeIs('app.pos.index') ? 'c-active' : '' }}">
    <a class="c-sidebar-nav-link" href="{{ route('app.pos.index') }}">
        <i class="c-sidebar-nav-icon bi bi-shop" style="line-height: 1;"></i> POS Sales
    </a>
</li>
@endcan

@can('access_products')
<li class="c-sidebar-nav-title">{{ __('sidebar.products') }}</li>
@can('access_product_categories')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('product-categories.*') ? 'c-active' : '' }}" href="{{ route('product-categories.index') }}">
        <i class="c-sidebar-nav-icon bi bi-collection" style="line-height: 1;"></i> {{ __('sidebar.categories') }}
    </a>
</li>
@endcan
@can('create_products')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('products.create') ? 'c-active' : '' }}" href="{{ route('products.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_product') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('products.index') ? 'c-active' : '' }}" href="{{ route('products.index') }}">
        <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_products') }}
    </a>
</li>
@can('print_barcodes')
   <li class="c-sidebar-nav-item">
       <a class="c-sidebar-nav-link {{ request()->routeIs('barcode.print') ? 'c-active' : '' }}" href="{{ route('barcode.print') }}">
           <i class="c-sidebar-nav-icon bi bi-printer" style="line-height: 1;"></i> {{ __('sidebar.print_barcode') }}
       </a>
   </li>
@endcan
</li>
@endcan

@can('access_adjustments')
<li class="c-sidebar-nav-title">{{ __('sidebar.stock_adjustments') }}</li>
@can('create_adjustments')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('adjustments.create') ? 'c-active' : '' }}" href="{{ route('adjustments.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_adjustment') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
<a class="c-sidebar-nav-link {{ request()->routeIs('adjustments.index') ? 'c-active' : '' }}" href="{{ route('adjustments.index') }}">
    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_adjustments') }}
</a>
</li>
@endcan

@can('access_quotations')
<li class="c-sidebar-nav-title">{{ __('sidebar.quotations') }}</li>
@can('create_adjustments')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('quotations.create') ? 'c-active' : '' }}" href="{{ route('quotations.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_quotation') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
<a class="c-sidebar-nav-link {{ request()->routeIs('quotations.index') ? 'c-active' : '' }}" href="{{ route('quotations.index') }}">
    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_quotations') }}
</a>
</li>
@endcan

@can('access_purchases')
<li class="c-sidebar-nav-title">{{ __('sidebar.purchases') }}</li>
@can('create_purchases')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('purchases.create') ? 'c-active' : '' }}" href="{{ route('purchases.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_purchase') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('purchases.index') ? 'c-active' : '' }}" href="{{ route('purchases.index') }}">
        <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_purchases') }}
    </a>
</li>
@endcan

@can('access_purchase_returns')
<li class="c-sidebar-nav-title">{{ __('sidebar.purchase_returns') }}</li>
@can('create_purchase_returns')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('purchase-returns.create') ? 'c-active' : '' }}" href="{{ route('purchase-returns.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_purchase_return') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
<a class="c-sidebar-nav-link {{ request()->routeIs('purchase-returns.index') ? 'c-active' : '' }}" href="{{ route('purchase-returns.index') }}">
    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_purchase_returns') }}
</a>
</li>
@endcan

@can('access_sales')
<li class="c-sidebar-nav-title">{{ __('sidebar.sales') }}</li>
@can('create_sales')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('sales.create') ? 'c-active' : '' }}" href="{{ route('sales.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_sale') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
<a class="c-sidebar-nav-link {{ request()->routeIs('sales.index') ? 'c-active' : '' }}" href="{{ route('sales.index') }}">
    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_sales') }}
</a>
</li>
@endcan

@can('access_sale_returns')
<li class="c-sidebar-nav-title">{{ __('sidebar.sale_returns') }}</li>
@can('create_sale_returns')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('sale-returns.create') ? 'c-active' : '' }}" href="{{ route('sale-returns.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_sale_return') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('sale-returns.index') ? 'c-active' : '' }}" href="{{ route('sale-returns.index') }}">
        <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_sale_returns') }}
    </a>
</li>
@endcan

@can('access_expenses')
<li class="c-sidebar-nav-title">{{ __('sidebar.expenses') }}</li>
@can('access_expense_categories')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('expense-categories.*') ? 'c-active' : '' }}" href="{{ route('expense-categories.index') }}">
        <i class="c-sidebar-nav-icon bi bi-collection" style="line-height: 1;"></i> {{ __('sidebar.categories_expenses') }}
    </a>
</li>
@endcan
@can('create_expenses')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('expenses.create') ? 'c-active' : '' }}" href="{{ route('expenses.create') }}">
        <i class="c-sidebar-nav-icon bi bi-journal-plus" style="line-height: 1;"></i> {{ __('sidebar.create_expense') }}
    </a>
</li>
@endcan
<li class="c-sidebar-nav-item">
<a class="c-sidebar-nav-link {{ request()->routeIs('expenses.index') ? 'c-active' : '' }}" href="{{ route('expenses.index') }}">
    <i class="c-sidebar-nav-icon bi bi-journals" style="line-height: 1;"></i> {{ __('sidebar.all_expenses') }}
</a>
</li>
@endcan

<li class="c-sidebar-nav-title">{{ __('sidebar.parties') }}</li>
@can('access_customers')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('customers.*') ? 'c-active' : '' }}" href="{{ route('customers.index') }}">
        <i class="c-sidebar-nav-icon bi bi-person-badge" style="line-height: 1;"></i> {{ __('sidebar.customers') }}
    </a>
</li>
@endcan
@can('access_suppliers')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('suppliers.*') ? 'c-active' : '' }}" href="{{ route('suppliers.index') }}">
        <i class="c-sidebar-nav-icon bi bi-truck" style="line-height: 1;"></i> {{ __('sidebar.suppliers') }}
    </a>
</li>
@endcan


@can('access_reports')
    <li class="c-sidebar-nav-title">{{ __('sidebar.reports') }}</li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->routeIs('profit-loss-report.index') ? 'c-active' : '' }}" href="{{ route('profit-loss-report.index') }}">
            <i class="c-sidebar-nav-icon bi bi-graph-up" style="line-height: 1;"></i> {{ __('sidebar.profit_loss_report') }}
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->routeIs('payments-report.index') ? 'c-active' : '' }}" href="{{ route('payments-report.index') }}">
            <i class="c-sidebar-nav-icon bi bi-cash-stack" style="line-height: 1;"></i> {{ __('sidebar.payments_report') }}
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->routeIs('sales-report.index') ? 'c-active' : '' }}" href="{{ route('sales-report.index') }}">
            <i class="c-sidebar-nav-icon bi bi-cart-check" style="line-height: 1;"></i> {{ __('sidebar.sales_report') }}
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->routeIs('purchases-report.index') ? 'c-active' : '' }}" href="{{ route('purchases-report.index') }}">
            <i class="c-sidebar-nav-icon bi bi-box-seam" style="line-height: 1;"></i> {{ __('sidebar.purchases_report') }}
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->routeIs('sales-return-report.index') ? 'c-active' : '' }}" href="{{ route('sales-return-report.index') }}">
            <i class="c-sidebar-nav-icon bi bi-arrow-counterclockwise" style="line-height: 1;"></i> {{ __('sidebar.sales_return_report') }}
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->routeIs('purchases-return-report.index') ? 'c-active' : '' }}" href="{{ route('purchases-return-report.index') }}">
            <i class="c-sidebar-nav-icon bi bi-arrow-return-left" style="line-height: 1;"></i> {{ __('sidebar.purchases_return_report') }}
        </a>
    </li>
@endcan

@canany(['access_user_management', 'access_units', 'access_currencies', 'access_settings'])
<li class="c-sidebar-nav-title">{{ __('sidebar.settings') }}</li>
@endcanany

@can('access_user_management')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('users.create') ? 'c-active' : '' }}" href="{{ route('users.create') }}">
        <i class="c-sidebar-nav-icon bi bi-person-plus" style="line-height: 1;"></i> {{ __('sidebar.create_user') }}
    </a>
</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('users') ? 'c-active' : '' }}" href="{{ route('users.index') }}">
        <i class="c-sidebar-nav-icon bi bi-person-lines-fill" style="line-height: 1;"></i> {{ __('sidebar.all_users') }}
    </a>
</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('roles*') ? 'c-active' : '' }}" href="{{ route('roles.index') }}">
        <i class="c-sidebar-nav-icon bi bi-key" style="line-height: 1;"></i> {{ __('sidebar.roles_permissions') }}
    </a>
</li>
@endcan

@can('access_settings')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('settings*') ? 'c-active' : '' }}" href="{{ route('settings.index') }}">
        <i class="c-sidebar-nav-icon bi bi-sliders" style="line-height: 1;"></i> {{ __('sidebar.system_settings') }}
    </a>
</li>
@can('access_units')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('units*') ? 'c-active' : '' }}" href="{{ route('units.index') }}">
        <i class="c-sidebar-nav-icon bi bi-calculator" style="line-height: 1;"></i> {{ __('sidebar.units') }}
    </a>
</li>
@endcan
@can('access_currencies')
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ request()->routeIs('currencies*') ? 'c-active' : '' }}" href="{{ route('currencies.index') }}">
        <i class="c-sidebar-nav-icon bi bi-cash-stack" style="line-height: 1;"></i> {{ __('sidebar.currencies') }}
    </a>
</li>
@endcan
@endcan