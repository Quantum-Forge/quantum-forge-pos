@if ($data->payment_status == 'Partial')
    <span class="badge badge-warning">
        {{ __('form.partial') }}
    </span>
@elseif ($data->payment_status == 'Paid')
    <span class="badge badge-success">
        {{ __('form.paid') }}
    </span>
@else
    <span class="badge badge-danger">
        {{ __('form.unpaid') }}
    </span>
@endif
