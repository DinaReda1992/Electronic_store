<x-app-layout>
    <div class="container">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="row pt-5 justify-content-center">
                    <div class="card p-0">
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
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Name</th>
                                        <th>Actions</th>
                                </tr>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class='list-group-item py-3 text-muted d-flex justify-content-between'>
                                            {{ $category->category_name }}
                                        </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ url('/subCategories/' . $category->id . '/listSubCategories') }}"
                                                        class="btn btn-success btn-sm ms-3">Show Sub-Categories</a>                                                    <a href="{{ url('/categoryProducts/' . $category->id . '/listCategoryProducts') }}"
                                                            class="btn btn-success btn-sm ms-3">Show Products</a>
                                                @if (auth()->user()->isAdmin == 1)
                                                    <a href="{{ url('subCategories/' . $category->id . '/createNew') }}"
                                                        class="btn btn-info ms-3">
                                                        Add Sub-Category
                                                    </a>
                                                        <a href="{{ url('categoryProducts/' . $category->id . '/createNew') }}"
                                                            class="btn btn-info ms-3">
                                                            Add Product
                                                        </a>
                                                @endif
                                                </div>

                                            </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="text-center mt-4">
                                @if (auth()->user()->isAdmin == 1)
                                    <a href="{{ route('createCategory',$company)}}" class="btn btn-info">
                                        Add New Category
                                    </a>
                                @endif
                                <div class="col-12">
                                    <hr>
                                    <a class="btn btn-primary px-4" href="/companies">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
