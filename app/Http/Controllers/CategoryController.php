<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        return view('createCategory')->with('company',$company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Company $company)
    {
        $request->validate([
            // 'company_id' =>'required',
            'category_name' => 'required',
        ]);
        $category = new Category;
        $category->company_id = $company->id;
        $category->category_name = $request->category_name;
        $request->session()->flash('addition','Added Successfully');
        $category->save();
        return redirect('/categories/'.$company->id.'/listCategories');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        {
            return view('editCategory')->with('category',$category);
        }
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'company_name' => 'required',
        ]);
            $category->category_name = $request->category_name;
            $category->save();
            $request->session()->flash('success','Updated Successfully');
            return redirect('/companies');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Company $company, Category $category)
    // {
    //     $category->where('company_id',$company->id)->delete();
    //     session()->flash('deletion','Deleted Successfully');
    //     return redirect('/categories');
    // }
}
