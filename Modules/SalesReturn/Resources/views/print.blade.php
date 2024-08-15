<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sale Return Details</title>
    <link rel="stylesheet" href="{{ public_path('b3/bootstrap.min.css') }}">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div style="text-align: center;margin-bottom: 25px;">
                <img width="180" src="{{ public_path('images/logo-dark.png') }}" alt="Logo">
                <h4 style="margin-bottom: 20px;">
                    <span>{{ __('sales_return.reference') }}::</span> <strong>{{ $sale_return->reference }}</strong>
                </h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-xs-4 mb-3 mb-md-0">
                            <h4 class="mb-2" style="border-bottom: 1px solid #dddddd;padding-bottom: 10px;">{{ __('sales.company_info') }}:</h4>
                            <div><strong>{{ settings()->company_name }}</strong></div>
                            <div>{{ settings()->company_address }}</div>
                            <div>{{ __('sales_return.print.email') }}: {{ settings()->company_email }}</div>
                            <div>{{ __('sales_return.print.phone') }}: {{ settings()->company_phone }}</div>
                        </div>

                        <div class="col-xs-4 mb-3 mb-md-0">
                            <h4 class="mb-2" style="border-bottom: 1px solid #dddddd;padding-bottom: 10px;">{{ __('sales.customer_info') }}:</h4>
                            <div><strong>{{ $customer->customer_name }}</strong></div>
                            <div>{{ $customer->address }}</div>
                            <div>{{ __('sales_return.print.email') }}: {{ $customer->customer_email }}</div>
                            <div>{{ __('sales_return.print.phone') }}: {{ $customer->customer_phone }}</div>
                        </div>

                        <div class="col-xs-4 mb-3 mb-md-0">
                            <h4 class="mb-2" style="border-bottom: 1px solid #dddddd;padding-bottom: 10px;">{{ __('sales.invoice_info') }}:</h4>
                            <div>{{ __('sales_return.print.invoice') }}: <strong>INV/{{ $sale_return->reference }}</strong></div>
                            <div>{{ __('sales_return.print.date') }}: {{ \Carbon\Carbon::parse($sale_return->date)->format('d M, Y') }}</div>
                            <div>
                                Status: <strong>{{ __('form.status.' . $sale_return->status) }}</strong>
                            </div>
                            <div>
                                {{ __('sales_return.print.payment_status') }}: <strong>{{ __('form.status.' . $sale_return->payment_status) }}</strong>
                            </div>
                        </div>

                    </div>

                    <div class="table-responsive-sm" style="margin-top: 30px;">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="align-middle">{{ __('sales_return.print.product') }}</th>
                                <th class="align-middle">{{ __('sales_return.print.net_unit_price') }}</th>
                                <th class="align-middle">{{ __('sales_return.print.quantity') }}</th>
                                <th class="align-middle">{{ __('sales_return.print.discount') }}</th>
                                <th class="align-middle">{{ __('sales_return.print.tax') }}</th>
                                <th class="align-middle">{{ __('sales_return.print.sub_total') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sale_return->saleReturnDetails as $item)
                                <tr>
                                    <td class="align-middle">
                                        {{ $item->product_name }} <br>
                                        <span class="badge badge-success">
                                                {{ $item->product_code }}
                                            </span>
                                    </td>

                                    <td class="align-middle">{{ format_currency($item->unit_price) }}</td>

                                    <td class="align-middle">
                                        {{ $item->quantity }}
                                    </td>

                                    <td class="align-middle">
                                        {{ format_currency($item->product_discount_amount) }}
                                    </td>

                                    <td class="align-middle">
                                        {{ format_currency($item->product_tax_amount) }}
                                    </td>

                                    <td class="align-middle">
                                        {{ format_currency($item->sub_total) }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-8">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="left"><strong>{{ __('sales_return.print.discount') }} ({{ $sale_return->discount_percentage }}%)</strong></td>
                                    <td class="right">{{ format_currency($sale_return->discount_amount) }}</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>{{ __('sales_return.print.tax') }} ({{ $sale_return->tax_percentage }}%)</strong></td>
                                    <td class="right">{{ format_currency($sale_return->tax_amount) }}</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>{{ __('sales_return.print.shipping') }} </strong></td>
                                    <td class="right">{{ format_currency($sale_return->shipping_amount) }}</td>
                                </tr>
                                <tr>
                                    <td class="left"><strong>{{ __('sales_return.print.grand_total') }} </strong></td>
                                    <td class="right"><strong>{{ format_currency($sale_return->total_amount) }}</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-xs-12">
                            <p style="font-style: italic;text-align: center">{{ settings()->company_name }} &copy; {{ date('Y') }}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
