<x-app-layout>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="card p-0" style="width:50%">
                <div class="card-header text-center">
                    <h1>Add New Category</h1>
                </div>
                <div class="card-body">
                    {{-- <label for="company_id">Select Company</label>
                    <select class='form-control' id='company_id' name='company_id'>
                        @foreach ($companies as $company)
                            <option value='{{$company->id}}'>{{ $company->company_name }}</option>
                        @endforeach
                    </select> --}}
                    <form method="POST" action="{{ route('storeCategory', $company) }}">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <label for="category_name"
                                        class="col-md-3 col-form-label text-md-right">{{ __('Title') }}</label>
                                    <input id="category_name" type="text"
                                        class="form-control @error('category_name') is-invalid @enderror"
                                        name="category_name" value="{{ old('category_name') }}" required
                                        autocomplete="category_name" autofocus>
                                    @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-primary px-4">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
