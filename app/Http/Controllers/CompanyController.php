<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function company(){
    //     return view("company.company");
    // }


    public function company(){
        $data=Company::paginate(2);
        return view('company.company',['data'=>$data]);

    }
    public function index()
    {
        //
        return view('company.addcompany');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //        
    
         
        $company=new Company;
        $company->cname=$req->cname;
        $company->email=$req->email;
        if ($req->hasFile('images')) {
            $file_type = $req->file('images')->extension();
           $file_name=time() . '.' . $file_type;
           
            $req->file('images')->move(public_path('image/'), time() . '.' . $file_type);
            $company->logo=$file_name;
          }
        $company->website=$req->website;
        $company->save();
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
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Company::find($id); 
      
        return view("company.editcompany",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //
        $data=Company::find($req->id); 
        $data->cname=$req->cname;
        $data->email=$req->email;
        
        if($req->hasFile('images'))
            {
                $file=$req->file('images');
                $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('image/',$filename);
        $data->logo=$filename;
        
            }
          $data->website=$req->website;
        $data->update();
        
        return redirect('company')->with('success', 'Data updated');
        }
          
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $data=Company::find($id);
            unlink(public_path('image/').$data->logo); 
         $data->delete();
        // DB::delete('delete from users where id=?',[$id]);
        return back();
        }
    
    }