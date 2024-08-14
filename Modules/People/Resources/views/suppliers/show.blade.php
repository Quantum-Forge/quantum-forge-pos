@extends('layouts.app')

@section('title', 'Supplier Details')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('sidebar.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('suppliers.index') }}">{{ __('sidebar.suppliers') }}</a></li>
        <li class="breadcrumb-item active">Details</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>{{ __('party.supplier.supplier_name') }}</th>
                                    <td>{{ $supplier->supplier_name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.supplier.email') }}</th>
                                    <td>{{ $supplier->supplier_email }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.supplier.phone') }}</th>
                                    <td>{{ $supplier->supplier_phone }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.supplier.city') }}</th>
                                    <td>{{ $supplier->city }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.supplier.country') }}</th>
                                    <td>{{ $supplier->country }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.supplier.address') }}</th>
                                    <td>{{ $supplier->address }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

