<x-app-layout>
    <div class="container">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="row pt-5 justify-content-center">
                    <div class="card p-0" style="width:50%">
                        <div class="card-header text-center">
                            <h1>All Categories</h1>
                        </div>
                        <div class="searchCategories pt-3">
                            <div class="d-flex justify-content-between px-3">
                                <input class="form-control w-50" type="text" value="" id="getCategoriesInput" />
                                <button class="btn btn-primary" id="getCategoriesBtn">Get Categories</button>
                                <a href="/allCategories" class="btn btn-secondary" id="resetCategories">Reset All</a>
                            </div>
                        <div class="card-body" id='allCategories'>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Title</th>
                                </tr>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class='list-group-item text-muted d-flex justify-content-between'>
                                            {{ $category->category_name }}
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
