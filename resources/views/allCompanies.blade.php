<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="container">
        <div class="row">
            <div class="col-12 margin-auto pt-5 justify-content-center">
                <div class="card">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('addition'))
                        <div class="alert alert-success">
                            {{ session()->get('addition') }}
                        </div>
                    @endif
                    @if (session()->has('deletion'))
                        <div class="alert alert-danger">
                            {{ session()->get('deletion') }}
                        </div>
                    @endif
                    <div class="bg-gray-500 card-header font-semibold fs-2 text-center text-white">
                        <h1>All Companies</h1>
                    </div>
                    <div class="card-body">
                        {{-- <form action={{ route('search') }} method="GET" role="search">
                                @csrf
                                <input type="text" class="form-control col-md-4 float-left" name="query" id="search"
                                    placeholder="Search...">
                                <button type='submit' class='btn btn-primary'>
                                    Search
                                </button>
                            </form> --}}
                        {{-- <input type="text" name="full_text_search" id="full_text_search" class="form-control"
                                placeholder="Search" value="">
                            <div class="col-md-2">
                                @csrf
                                <button type="button" name="search" id="search" class="btn btn-success">Search</button>
                            </div> --}}
                        <table class="table table-bordered table-hover w-100">
                            <tr>
                                <th>Name</th>
                                {{-- @if (auth()->user()->isAdmin == 1) --}}
                                <th>Actions</th>
                                {{-- @endif --}}
                            </tr>
                            @foreach ($companies as $company)
                                <tr>
                                    <td class='list-group-item text-muted d-flex justify-content-between'>
                                        {{ $company->company_name }}
                                    </td>
                                    {{-- @if (auth()->user()->isAdmin == 1) --}}
                                    <td>
                                        <div class="d-flex">
                                            <form class="d-inline" action="{{ route('destroy', $company->id) }}"
                                                method="PUT">
                                                {{ method_field('DELETE') }}
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class='fa fa-trash'> Delete </i>
                                                </button>
                                            </form>
                                            <a href="{{ url('/companies/' . $company->id . '/edit') }}"
                                                class="btn btn-success btn-sm ms-3">Update</a><br>
                                            <a href="{{ url('/categories/' . $company->id . '/listCategories') }}"
                                                class="btn btn-success btn-sm ms-3">Show</a><br>
                                            <a href="{{ url('categories/' . $company->id . '/createNew') }}"
                                                class="btn btn-info ms-3">
                                                {{-- <a href="{{ Route('createCategory'), $company->id }}" class="btn btn-info"> --}}
                                                Add Category
                                            </a>
                                        </div>

                                    </td>
                                    {{-- @endif --}}
                                </tr>
                            @endforeach
                        </table>
                        <div class="text-center mt-4">
                            {{-- @if (auth()->user()->isAdmin == 1) --}}
                            <a href="{{ url('companies/create') }}" class="btn btn-info">
                                Add New Company
                            </a>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
