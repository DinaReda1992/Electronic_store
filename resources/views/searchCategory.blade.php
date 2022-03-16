@if (isset($categories))
    <table class="full-width table table-hover">
        <tr class="bg-gray-700">
            <th>Title</th>
        </tr>
        @if (count($categories) > 0)
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->category_name }}
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
<div class="col-12">
    <hr>
    <a class="btn btn-primary px-4" href="/allCategories">Back</a>
</div>
