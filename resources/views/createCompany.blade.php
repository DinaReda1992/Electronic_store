<x-app-layout>
        <div class="container">
            <div class="row pt-5 justify-content-center">
            <div class="card" style= "width:50%">
                <div class="card-header text-center">
                    <h1>Add New Company</h1>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                        <div class="col-md-6">
                            <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>
                            @error('company_name')
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

