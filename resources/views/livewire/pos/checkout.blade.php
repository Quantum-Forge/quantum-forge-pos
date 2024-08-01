<div>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <div class="alert-body">
                            <span>{{ session('message') }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <label for="customer_id">{{ __('product_cart.customer') }} <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <a href="{{ route('customers.create') }}" class="btn btn-primary">
                                <i class="bi bi-person-plus"></i>
                            </a>
                        </div>
                        <select wire:model.live="customer_id" id="customer_id" class="form-control">
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th class="align-middle">{{ __('product_cart.product') }}</th>
                                <th class="align-middle">{{ __('product_cart.price') }}</th>
                                <th class="align-middle">{{ __('product_cart.quantity') }}</th>
                                <th class="align-middle">{{ __('product_cart.action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-nowrap">
                            @if ($cart_items->isNotEmpty())
                                @foreach ($cart_items as $cart_item)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $cart_item->name }} <br>
                                            <span class="badge badge-success">
                                                {{ $cart_item->options->code }}
                                            </span>
                                            @include('livewire.includes.product-cart-modal')
                                        </td>

                                        <td class="align-middle">
                                            {{ format_currency($cart_item->price) }}
                                        </td>

                                        <td class="align-middle">
                                            @include('livewire.includes.product-cart-quantity')
                                        </td>

                                        <td class="align-middle text-center">
                                            <a href="#"
                                                wire:click.prevent="removeItem('{{ $cart_item->rowId }}')">
                                                <i class="bi bi-x-circle font-2xl text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center">
                                        <span class="text-danger">
                                            {{ __('product_cart.search_select_products') }}
                                        </span>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>{{ __('product_cart.tax') }} ({{ $global_tax }}%)</th>
                                <td>(+) {{ format_currency(Cart::instance($cart_instance)->tax()) }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('product_cart.discount') }} ({{ $global_discount }}%)</th>
                                <td>(-) {{ format_currency(Cart::instance($cart_instance)->discount()) }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('product_cart.shipping') }}</th>
                                <input type="hidden" value="{{ $shipping }}" name="shipping_amount">
                                <td>(+) {{ format_currency($shipping) }}</td>
                            </tr>
                            <tr class="text-primary">
                                <th>Grand Total</th>
                                @php
                                    $total_with_shipping = round(Cart::instance($cart_instance)->total() + (float) $shipping, 0);
                                @endphp
                                <th>
                                    (=) {{ format_currency($total_with_shipping) }}
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="tax_percentage">{{ __('product_cart.tax') }} (%)</label>
                        <input wire:model.blur="global_tax" type="number" class="form-control" min="0"
                            max="100" value="{{ $global_tax }}" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="discount_percentage">{{ __('product_cart.discount') }} (%)</label>
                        <input wire:model.blur="global_discount" type="number" class="form-control" min="0"
                            max="100" value="{{ $global_discount }}" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="shipping_amount">{{ __('product_cart.shipping') }}</label>
                        <input wire:model.blur="shipping" type="number" class="form-control" min="0"
                            value="0" required step="0.01">
                    </div>
                </div>
            </div>

            <div class="form-group d-flex justify-content-center flex-wrap mb-0">
                <button wire:click="resetCart" type="button" class="btn btn-pill btn-danger mr-3"><i
                        class="bi bi-x"></i> Reset</button>
                <button wire:loading.attr="disabled" wire:click="proceed" type="button"
                    class="btn btn-pill btn-primary" {{ $total_amount == 0 ? 'disabled' : '' }}><i
                        class="bi bi-check"></i> {{ __('product_cart.proceed') }}</button>
            </div>
        </div>
    </div>

    {{-- Checkout Modal --}}
    @include('livewire.pos.includes.checkout-modal')

</div>
