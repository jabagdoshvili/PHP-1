<?php

namespace App\Http\Controllers;

use App\Models\Employ;
use Illuminate\Http\Request;

class EmployController extends Controller
{ 

   public function index()
   {
       $employees = Employ::orderBy('created_at','DESC')->get();
       return view('pages.employees',compact('employees'));
   }

   public function create()
   {
       return view('pages.createEmploy');
   }

   public function store(Request $request)
   {
       $request->validate( [
            'name'=>'required|max:255',
            'lastname'=>'required|max:255',
            'birthdate'=>'required|date',
            'personal_id'=>'required|numeric|max:99999999999',
            'salary'=>'required|numeric|max:1000000',
       ]);

       $data = $request->all();
       $data['created_at'] = time();
       $data['updated_at'] = time();
       Employ::create($data);

       return redirect(route('employees.index'))->with('success','employee Successfully Added');
   }

   public function edit(Employ $employee)
   {
       return view('pages.editEmploy',compact('employee'));
   }

   public function update(Request $request, Employ $employee)
   {
       $request->validate( [
           'name'=>'required|max:255',
           'lastname'=>'required|max:255',
           'birthdate'=>'required|date',
           'personal_id'=>'required|numeric',
           'salary'=>'required|numeric',
       ]);

       $data = $request->all();
       $data['updated_at'] = time();
       $employee->update($data);

       return redirect(route('employees.index'))->with('success','employ Successfully Updated');
   }

   public function destroy(Employ $employee)
   {
       $employee->delete();
       return back()->with('success','employ successfully destroyed');
   }
}