@if ($data->status == 'Pending')
    <span class="badge badge-info">
        {{ __('form.pending') }}
    </span>
@elseif (($data->status == 'Shipped'))
    <span class="badge badge-primary">
        {{ __('form.shipped') }}
    </span>
@else
    <span class="badge badge-success">
        {{ __('form.completed') }}
    </span>
@endif
