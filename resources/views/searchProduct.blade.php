@if (isset($products))
    <table class="full-width table table-hover">
        <tr class="bg-gray-700">
            <th>Product</th>
            <th>Price</th>
        </tr>
        @if (count($products) > 0)
            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->product_name }}
                    </td>
                    <td>
                        {{ $product->product_price }}
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>No Results Found</td>
            </tr>
        @endif
    </table>
@endif
</div>
</div>
{{-- <div class="col-12">
    <hr>
    <a class="btn btn-primary px-4" href="/products">Back</a>
</div> --}}
<div class="col-12">
    <hr>
    <a class="btn btn-primary px-4" href="/companies">Back</a>
</div>
