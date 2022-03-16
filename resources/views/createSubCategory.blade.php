<x-app-layout>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="card p-0" style="width:50%">
                <div class="card-header text-center">
                    <h1>Add New Sub-Category</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeSubCategory', $category) }}">
                        @csrf
                        {{-- <input type='hidden' value='{{$company->id}}' name='company_id'> --}}
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <label for="sub_category_name"
                                        class="col-md-3 form-label text-md-right">{{ __('Title') }}</label>
                                    <input id="sub_category_name" type="text"
                                        class="form-control @error('sub_category_name') is-invalid @enderror"
                                        name="sub_category_name" value="{{ old('sub_category_name') }}" required
                                        autocomplete="sub_category_name" autofocus>
                                    @error('sub_category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary px-4">
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
