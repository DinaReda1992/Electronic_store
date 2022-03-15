<x-app-layout>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="card" style="width:50%">
                <div class="card-header text-center">
                    <h1>Add New Sub-Category</h1>
                </div>
                <div class="card-body">
                    {{-- <label for="company_id">Select Company</label>
                    <select class='form-control' id='company_id' name='company_id'>
                        @foreach ($companies as $company)
                            <option value='{{$company->id}}'>{{ $company->company_name }}</option>
                        @endforeach
                    </select> --}}
                    <form method="POST" action="{{ route('storeSubCategory', $category) }}">
                        @csrf
                        {{-- <input type='hidden' value='{{$company->id}}' name='company_id'> --}}
                        <div class="form-group row">
                            <label for="sub_category_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                            <div class="col-md-6">
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
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
