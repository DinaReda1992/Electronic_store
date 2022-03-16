<x-app-layout>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="card p-0" style="width:50%">
                <div class="card-header text-center">
                    <h1>Update Company Details</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update', $company->id) }}">
                        {{ method_field('POST') }}
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <label for="company_name"
                                        class="form-label col-md-4 col-form-label text-md-right">{{ __('Company Title') }}</label>
                                    <input id="company_name" type="text"
                                        class="form-control @error('company_name') is-invalid @enderror"
                                        name="company_name" value="{{ $company->company_name }}" required
                                        autocomplete="company_name" autofocus>
                                    @error('company_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-2 px-5">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
