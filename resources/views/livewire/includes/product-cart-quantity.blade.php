<div class="input-group d-flex justify-content-center flex-nowrap">
    <input wire:model="quantity.{{ $cart_item->id }}" style="min-width: 70px;max-width: 70px;" type="number" class="form-control" value="{{ $cart_item->qty }}" min="1">
    <div class="input-group-append">
        <button type="button" wire:click="updateQuantity('{{ $cart_item->rowId }}', {{ $cart_item->id }})" class="btn btn-info">
            <i class="bi bi-check"></i>
        </button>
    </div>
</div>
