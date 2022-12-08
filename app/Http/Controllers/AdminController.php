<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(){
        return view('admin.login');
    }

    public function auth(Request $req){

            $req->validate([
            'email'=>'email|required',
            'password'=>'required'
        ]);
        $admin=Admin::where('email',$req->email)->first();
        if($admin){
            if(Hash::check($req->password,$admin->password)){

                $req->session()->put('ADMIN_ID',$admin->id);
                $req->session()->put('ADMIN_LOGIN',true);
                return view('dashboard');
            }
            }
        
        else{

            $req->session()->flash('unauthenticate user');
            return redirect('login');
        }
    }

    public function logout(){
        session()->forget('ADMIN_ID');
        session()->forget('ADMIN_LOGIN');
        return view('admin/login');

    }

   
    public function dashboard(){
        return view("dashboard");
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
