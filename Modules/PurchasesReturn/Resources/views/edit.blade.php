@extends('layouts.app')

@section('title', 'Edit Purchase Return')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('sidebar.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('purchase-returns.index') }}">{{ __('sidebar.purchase_returns') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('purchase_return.edit') }}</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid mb-4">
        <div class="row">
            <div class="col-12">
                <livewire:search-product />
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @include('utils.alerts')
                        <form id="purchase-return-form" action="{{ route('purchase-returns.update', $purchase_return) }}"
                            method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="reference">{{ __('form.reference') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="reference" required
                                            value="{{ $purchase_return->reference }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="from-group">
                                        <div class="form-group">
                                            <label for="supplier_id">{{ __('form.supplier') }} <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" name="supplier_id" id="supplier_id" required>
                                                @foreach (\Modules\People\Entities\Supplier::all() as $supplier)
                                                    <option
                                                        {{ $purchase_return->supplier_id == $supplier->id ? 'selected' : '' }}
                                                        value="{{ $supplier->id }}">{{ $supplier->supplier_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="from-group">
                                        <div class="form-group">
                                            <label for="date">{{ __('form.date') }} <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date" required
                                                value="{{ $purchase_return->date }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <livewire:product-cart :cartInstance="'purchase_return'" :data="$purchase_return" />

                            <div class="form-row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="status">Status <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option {{ $purchase_return->status == 'Pending' ? 'selected' : '' }}
                                                value="Pending">{{ __('form.pending') }}</option>
                                            <option {{ $purchase_return->status == 'Shipped' ? 'selected' : '' }}
                                                value="Shipped">{{ __('form.shipped') }}</option>
                                            <option {{ $purchase_return->status == 'Completed' ? 'selected' : '' }}
                                                value="Completed">{{ __('form.completed') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="from-group">
                                        <div class="form-group">
                                            <label for="payment_method">{{ __('product_cart.payment_method') }}<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="payment_method" required
                                                value="{{ $purchase_return->payment_method }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="paid_amount">{{ __('form.amount_paid') }} <span
                                                class="text-danger">*</span></label>
                                        <input id="paid_amount" type="text" class="form-control" name="paid_amount"
                                            required value="{{ $purchase_return->paid_amount }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="note">{{ __('form.note') }}</label>
                                <textarea name="note" id="note" rows="5" class="form-control">{{ $purchase_return->note }}</textarea>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('purchase_return.update_purchase_return') }} <i class="bi bi-check"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page_scripts')
    <script src="{{ asset('js/jquery-mask-money.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#paid_amount').maskMoney({
                prefix: '{{ settings()->currency->symbol }}',
                thousands: '{{ settings()->currency->thousand_separator }}',
                decimal: '{{ settings()->currency->decimal_separator }}',
                allowZero: true,
                precision: 0,
            });

            $('#paid_amount').maskMoney('mask');

            $('#purchase-return-form').submit(function() {
                var paid_amount = $('#paid_amount').val().replace(/[^\d]/g, '');
                $('#paid_amount').val(paid_amount);
            });
        });
    </script>
@endpush
