<div>
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form wire:submit="generateReport">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('reports.payment_report.start_date') }} <span class="text-danger">*</span></label>
                                    <input wire:model="start_date" type="date" class="form-control" name="start_date">
                                    @error('start_date')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('reports.payment_report.end_date') }} <span class="text-danger">*</span></label>
                                    <input wire:model="end_date" type="date" class="form-control" name="end_date">
                                    @error('end_date')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('reports.payment_report.payment') }}</label>
                                    <select wire:model.live="payments" class="form-control" name="payments">
                                        <option>{{ __('reports.payment_report.select_payment') }}...</option>
                                        <option value="sale">{{ __('reports.payment_report.sale') }}</option>
                                        <option value="sale_return">{{ __('reports.payment_report.sale_return') }}</option>
                                        <option value="purchase">{{ __('reports.payment_report.purchase') }}</option>
                                        <option value="purchase_return">{{ __('reports.payment_report.purchase_return') }}</option>
                                    </select>
                                    @error('payments')
                                        <span class="text-danger mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>{{ __('reports.payment_report.payment_method') }}</label>
                                    <select wire:model="payment_method" class="form-control" name="payment_method">
                                        <option>{{ __('reports.payment_report.select_payment') }}...</option>
                                        @foreach (App\Interface\PaymentMethod::getAllPaymentMethod() as $item)
                                            <option value="{{ $item->displayName() }}">{{ $item->displayName() }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                <span wire:target="generateReport" wire:loading class="spinner-border spinner-border-sm"
                                    role="status" aria-hidden="true"></span>
                                <i wire:target="generateReport" wire:loading.remove class="bi bi-shuffle mr-1"></i>
                                {{ __('reports.payment_report.filter_report') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($information->isNotEmpty())
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <table class="table table-bordered table-striped text-center mb-0">
                            <div wire:loading.flex
                                class="col-12 position-absolute justify-content-center align-items-center"
                                style="top:0;right:0;left:0;bottom:0;background-color: rgba(255,255,255,0.5);z-index: 99;">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <thead>
                                <tr>
                                    <th>{{ __('reports.payment_report.date') }}</th>
                                    <th>{{ __('reports.payment_report.reference') }}</th>
                                    <th>{{ __('reports.payment_report.' . $payments) }}</th>
                                    <th>Total</th>
                                    <th>{{ __('reports.payment_report.payment_method') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($information as $data)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($data->date)->format('d M, Y') }}</td>
                                        <td>{{ $data->reference }}</td>
                                        <td>
                                            @if ($payments == 'sale')
                                                {{ $data->sale->reference }}
                                            @elseif($payments == 'purchase')
                                                {{ $data->purchase->reference }}
                                            @elseif($payments == 'sale_return')
                                                {{ $data->saleReturn->reference }}
                                            @elseif($payments == 'purchase_return')
                                                {{ $data->purchaseReturn->reference }}
                                            @endif
                                        </td>
                                        <td>{{ format_currency($data->amount) }}</td>
                                        <td>{{ $data->payment_method }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">
                                            <span class="text-danger">No Data Available!</span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div @class(['mt-3' => $information->hasPages()])>
                            {{ $information->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="alert alert-warning mb-0">
                            {{ __('reports.payment_report.no_data') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
