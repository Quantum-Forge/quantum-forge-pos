@extends('layouts.app')

@section('title', 'Customer Details')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('sidebar.home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">{{ __('sidebar.customers') }}</a></li>
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
                                    <th>{{ __('party.customer.customer_name') }}</th>
                                    <td>{{ $customer->customer_name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.customer.email') }}</th>
                                    <td>{{ $customer->customer_email }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.customer.phone') }}</th>
                                    <td>{{ $customer->customer_phone }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.customer.city') }}</th>
                                    <td>{{ $customer->city }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.customer.country') }}</th>
                                    <td>{{ $customer->country }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('party.customer.address') }}</th>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

