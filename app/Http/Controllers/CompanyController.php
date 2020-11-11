<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::orderBy('created_at','DESC')->get();
        return view('pages.companies',compact('companies'));
    }


    public function create()
    {
        return view('pages.createCompany');
    }

    public function store(Request $request)
    {
        $request->validate( [
            'name'=>'required|max:255',
            'code'=>'required|max:255',
            'address'=>'required|max:255',
            'city'=>'required|max:255',
            'country'=>'required|max:255',
        ]);

        $data = $request->all();
        Company::create($data);

        return redirect(route('companies.index'))->with('success','company Successfully Added');
    }

    public function edit(Company $company)
    {
        return view('pages.editCompany',compact('company'));
    }


    public function update(Request $request, Company $company)
    {
        $request->validate( [
            'name'=>'required|max:255',
            'code'=>'required|max:255',
            'address'=>'required|max:255',
            'city'=>'required|max:255',
            'country'=>'required|max:255',
        ]);

        $data = $request->all();
        $company->update($data);

        return redirect(route('companies.index'))->with('success','company Successfully Updated');
    }


    public function destroy(Company $company)
    {
        $company->delete();
        return back()->with('success','company successfully destroyed');
    }
} 