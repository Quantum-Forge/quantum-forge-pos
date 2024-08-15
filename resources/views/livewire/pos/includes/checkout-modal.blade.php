<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel"
    aria-hidden="true">
    @php
        $total_with_shipping = round(Cart::instance($cart_instance)->total() + (float) $shipping, 0);
    @endphp
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           
            <form id="checkout-form" class="mt-3" action="{{ route('app.pos.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    @if (session()->has('checkout_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="alert-body">
                                <span>{{ session('checkout_message') }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-7">
                            <input type="hidden" value="{{ $customer_id }}" name="customer_id">
                            <input type="hidden" value="{{ $global_tax }}" name="tax_percentage">
                            <input type="hidden" value="{{ $global_discount }}" name="discount_percentage">
                            <input type="hidden" value="{{ $shipping }}" name="shipping_amount">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="total_amount">{{ __('product_cart.total_amount') }} <span
                                                class="text-danger">*</span></label>
                                        <input id="total_amount" type="text" class="form-control" name="total_amount"
                                            value="{{ $total_with_shipping }}" readonly required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="paid_amount">{{ __('product_cart.total_received') }} <span
                                                class="text-danger">*</span></label>
                                        <input id="paid_amount" type="text" class="form-control" name="paid_amount"
                                            value="{{ $total_with_shipping }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="due_amount">{{ __('product_cart.due_amount') }} <span class="text-danger">*</span></label>
                                <input id="due_amount" type="text" class="form-control" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label for="payment_method">{{ __('product_cart.payment_method') }}<span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_method" id="payment_method" required>
                                    @foreach (App\Interface\PaymentMethod::getAllPaymentMethod() as $item)
                                        <option value="{{ $item->value }}">{{ $item->displayName() }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="note">{{ __('product_cart.note') }}</label>
                                <textarea name="note" id="note" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="print_invoice" name="print_invoice" checked>
                                <label class="form-check-label" for="print_invoice">Print Invoice</label>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>{{ __('product_cart.total_products') }}</th>
                                        <td>
                                            <span class="badge badge-success">
                                                {{ Cart::instance($cart_instance)->count() }}
                                            </span>
                                        </td>
                                    </tr>
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
                                        <th>
                                            (=) {{ format_currency($total_with_shipping) }}
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('form.close') }}</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
