@if ($data->status == 'Pending')
    <span class="badge badge-info">
        {{ __('form.pending') }}
    </span>
@else
    <span class="badge badge-success">
        {{ __('form.completed') }}
    </span>
@endif

