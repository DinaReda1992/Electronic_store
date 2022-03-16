<x-app-layout>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="card p-0" style="width:70%">
                <div class="card-header text-center">
                    <h1>Add New Sub-Category Product</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeSubCategoryProduct', [$category, $subCategory]) }}">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <label for="product_name"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                    <input id="product_name" type="text"
                                        class="form-control @error('product_name') is-invalid @enderror"
                                        name="product_name" value="{{ old('product_name') }}" required
                                        autocomplete="product_name" autofocus>
                                    @error('product_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="product_price"
                                        class="col-md-4 form-label text-md-right">{{ __('Price') }}</label>
                                    <input id="product_price" type="number" step="0.1"
                                        class="form-control @error('product_price') is-invalid @enderror"
                                        name="product_price" value="{{ old('product_price') }}" required
                                        autocomplete="product_price" autofocus>
                                    @error('product_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-4 mt-2">
                                        {{ __('Save') }}
                                    </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
