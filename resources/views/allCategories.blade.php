<x-app-layout>
    <div class="container">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="row pt-5 justify-content-center">
                    <div class="card" style="width:50%">
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

                        <div class="card-header text-center">
                            <h1>All Categories</h1>
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
                            //
                            {{-- <input type="text" name="full_text_search" id="full_text_search" class="form-control"
                                placeholder="Search" value="">
                            <div class="col-md-2">
                                @csrf
                                <button type="button" name="search" id="search" class="btn btn-success">Search</button>
                            </div> --}}
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Name</th>
                                    {{-- @if (auth()->user()->isAdmin == 1) --}}
                                        <th>Actions</th>
                                    {{-- @endif --}}
                                </tr>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class='list-group-item text-muted d-flex justify-content-between'>
                                            {{ $category->category_name }}
                                        </td>
                                        @if (auth()->user()->isAdmin == 1)
                                            <td>
                                                {{-- <a href="{{ url('categories/' . $category->id . '/edit') }}" class="btn btn-success btn-sm">Update</a> --}}
                                                <a href="{{ url('subCategories/' . $category->id . '/createNew') }}"
                                                    class="btn btn-info ms-3">
                                                    Add Sub-Category
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                            <div class="text-center mt-4">
                                @if (auth()->user()->isAdmin == 1)
                                    <a href="{{ route('createCategory',$company)}}" class="btn btn-info">
                                        Add New Category
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
