<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return view ('allCompanies', ['companies' => $company]);
    }

    public function create()
    {
        return view('createCompany');
    }

    public function store(Request $request, Company $company)
    {
        $request->validate([
            'company_name' => 'required',
        ]);
        $company = new Company;
        $company->company_name = $request->company_name;
        $request->session()->flash('addition','Added Successfully');
        $company->save();
        return redirect('/companies');
    }

    public function edit(Company $company)
    {
        return view('editCompany')->with('company',$company);
    }

    public function update(Request $request, Company $company)
{
    $request->validate([
        'company_name' => 'required',
    ]);
        $company->company_name = $request->company_name;
        $company->save();
        $request->session()->flash('success','Updated Successfully');
        return redirect('/companies');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        session()->flash('deletion','Deleted Successfully');
        return redirect('/companies');
    }

    // public function search(Request $request)
    // {
    //     if (isset($_GET['query'])){
    //         $search_text = $_GET['query'];
    //         $companies = DB::table('companies')->where('firstName','LIKE','%'.$search_text.'%')->paginate(5);
    //         return view('search', ['companies'=> $companies]);
    //     }
    //}
}

