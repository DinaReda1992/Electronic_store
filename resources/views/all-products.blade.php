<x-app-layout>
    <div class="container">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="row pt-5 justify-content-center">
                    <div class="card p-0" style="width:50%">
                        <div class="card-header text-center">
                            <h1>All Products</h1>
                        </div>
                        <div class="searchProduct pt-3">
                            <div class="d-flex justify-content-between px-3">
                                <input class="form-control w-50" type="text" value="" id="getProductsInput" />
                                <button class="btn btn-primary" id="getProductsBtn">Get Products</button>
                                <a href="/products" class="btn btn-secondary" id="resetProducts">Reset All</a>
                            </div>

                            {{-- <form action={{ route('search') }} method="GET" role="search">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control col-md-4 float-left" name="query" id="search"
                                                placeholder="Search...">
                                                <button type='submit' class='btn btn-primary'>
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                        <div class="card-body" id="allProd">
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
                                        <td>
                                            {{ $product->product_price }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
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
</x-app-layout>
