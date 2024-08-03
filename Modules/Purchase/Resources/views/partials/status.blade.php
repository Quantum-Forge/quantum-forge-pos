@if ($data->status == 'Pending')
    <span class="badge badge-info">
        {{ __('form.pending') }}
    </span>
@elseif ($data->status == 'Ordered')
    <span class="badge badge-primary">
        {{ __('form.ordered') }}
    </span>
@else
    <span class="badge badge-success">
        {{ __('form.completed') }}
    </span>
@endif
