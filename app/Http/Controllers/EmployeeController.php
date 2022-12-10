<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employee(){
        // $employees = Employee::with('company')->get();

        // $companies = Company::with('employee')->get();
        $data=Employee::paginate(10);
        return view('employee.employee',['data'=>$data]);

        // return view('employee.employee', compact('employees', 'companies'));
    }
 

    public function index()
    {
        //
        
        $q=Company::all();
        return view('employee.addemployee',['q'=>$q]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //        
    
        $req->validate([
            'fname'=>'required',
            'lname'=>'required',
               
        ]);
        $employee=new Employee();
        $employee->fname=$req->fname;
        $employee->lname=$req->lname;
        $employee->company=$req->company;
        $employee->email=$req->email;
        $employee->phone=$req->contact;
        $employee->save();
        return back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Employee::find($id); 
      $q=Company::all();
        return view("employee.editemployee",['data'=>$data,'q'=>$q]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //
        $data=Employee::find($req->id); 
       
        $data->fname=$req->fname;
        $data->lname=$req->lname;
        $data->company=$req->company;
        $data->email=$req->email;
        $data->phone=$req->contact;
        $data->update();
        
        return redirect('employee')->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Employee::find($id);
     $data->delete();
    // DB::delete('delete from users where id=?',[$id]);
    return back();
    }
}
