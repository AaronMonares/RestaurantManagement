<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function retrieveAll()
    {
        $admin = Admin::all();

        return $admin;
    }

    public function show($id)
    {
        $admin = Admin::find($id);

        return $admin;
    }

    //for admin1 only
    public function getAdmin()
    {
        return $admin = Admin::find(1);
    }

    public function create(Request $request)
    {
        $admin = Admin::create([
            'first_name' => $request->first_name, 
            'last_name' => $request-> last_name,  
            'username' => $request->username, 
            'password' => $request->password
        ]);

        return $admin;
    }

    public function update($id, Request $request)
    {
        $admin = Admin::find($id);

        $admin->update([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name,  
            'username' => $request->username, 
            'password' => $request->password
        ]);
        
        return $admin;
    }

    //for admin1 only
    public function updateAdmin1(Request $request)
    {
        $admin = Admin::first();
        
        $admin -> update([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name,  
            'username' => $request->username, 
            'password' => $request->password
        ]);
        
        return $admin;
    }

    public function delete($id)
    {
        return Admin::destroy($id);   // $admin = Admin::find($id);  // return $admin->delete();
    }
}
