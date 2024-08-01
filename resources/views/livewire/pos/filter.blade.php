<div>
    <div class="form-row">
        <div class="col-md-7">
            <div class="form-group">
                <label>{{ __('product_cart.product_category') }}</label>
                <select wire:model.live="category" class="form-control">
                    <option value="">{{ __('product_cart.all_product') }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>{{ __('product_cart.product_count') }}</label>
                <select wire:model.live="showCount" class="form-control">
                    <option value="9">9 {{ __('product_cart.product') }}</option>
                    <option value="15">15 {{ __('product_cart.product') }}</option>
                    <option value="21">21 {{ __('product_cart.product') }}</option>
                    <option value="30">30 {{ __('product_cart.product') }}</option>
                    <option value="">{{ __('product_cart.all_product') }}</option>
                </select>
            </div>
        </div>
    </div>
</div>
