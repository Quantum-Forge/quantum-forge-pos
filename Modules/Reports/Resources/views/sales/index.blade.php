@extends('layouts.app')

@section('title', 'Sales Report')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('sidebar.home') }}</a></li>
        <li class="breadcrumb-item active">{{ __('sidebar.sales_report') }}</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <livewire:reports.sales-report :customers="\Modules\People\Entities\Customer::all()"/>
    </div>
@endsection
