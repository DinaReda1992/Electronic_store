<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="card" style="width:50%">
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
                        {{-- <input type='hidden' value='{{$company->id}}' name='company_id'> --}}
                        <div class="form-group row">
                            <label for="category_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                            <div class="col-md-6">
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
