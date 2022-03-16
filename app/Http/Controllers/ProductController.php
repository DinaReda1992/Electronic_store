<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return view('all-products')->with('products',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCategoryProduct(Category $category)
    {
        return view('createCategoryProduct')->with('category',$category);
    }

    public function createSubCategoryProduct(Category $category,SubCategory $subCategory)
    {
        return view('createSubCategoryProduct')->with('category',$category)->with('subCategory',$subCategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategoryProduct(Request $request,Category $category)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
        ]);
        $product = new Product;
        $product->category_id = $category->id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $request->session()->flash('addition','Added Successfully');
        $product->save();
        return redirect('/categoryProducts/'.$category->id.'/listCategoryProducts');
    }

    public function storeSubCategoryProduct(Request $request,Category $category,SubCategory $subCategory)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
        ]);
        $product = new Product;
        $product->category_id = $category->id;
        $product->sub_category_id = $subCategory->id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $request->session()->flash('addition','Added Successfully');
        $product->save();
        return redirect('/subCategoryProducts/'.$category->id.'/'.$subCategory->id.'/listSubCategoryProducts');
    }

    public function search(Request $request)
    {
        if (isset($_GET['query'])){
            $search_text = $_GET['query'];
            $product = DB::table('products')->where('product_name','LIKE','%'.$search_text.'%')->paginate(5);
            return view('searchProduct', ['products'=> $product]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    /**
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
