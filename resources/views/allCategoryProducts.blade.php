<x-app-layout>
    <div class="container">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="row pt-5 justify-content-center">
                    <div class="card p-0" style="width:50%">
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
                            <h1>All Category Products</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Name</th>
                                    <th> Price </th>
                                </tr>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class='list-group-item text-muted d-flex justify-content-between'>
                                            {{ $product->product_name }}
                                        </td>
                                        <td >
                                            {{ $product->product_price }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="text-center mt-4">
                                @if (auth()->user()->isAdmin == 1)
                                    <a href="{{ route('createCategoryProduct',$category)}}" class="btn btn-info">
                                        Add New Product
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
