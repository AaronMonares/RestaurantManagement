<?php

namespace App\Http\Controllers;

use App\Models\Employee; //maluwas adi kun ig tab/enter an modelname
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function home()
    // {
    //     $firstName ="Jorge";
    //     $lastName = "Stregan";
    //     return view('home',['first_name' => $firstName , 'last_name' => $lastName]);
    // }

    public function retrieveAll()
    {
        return Employee::all();
    }

    public function show($id)
    {
        return Employee::find($id);
    }

    public function create(Request $request)
    {
        $employee = Employee::create([
            'employees_name' => $request->employees_name, 
            'contact_number' => $request-> contact_number,  
            'gender' => $request->gender, 
            'address' => $request->address,
            'designation' => $request->designation,
            'salary' => $request->salary
        ]);
        
        return $employee;
    }

    public function update($id, Request $request)
    {
        $employee = Employee::find($id);

        $employee->update([
            'employees_name' => $request->employees_name, 
            'contact_number' => $request-> contact_number,  
            'gender' => $request->gender, 
            'address' => $request->address,
            'designation' => $request->designation,
            'salary' => $request->salary
        ]);
        
        return $employee;
    }

    public function delete($id)
    {
        return Employee::destroy($id);
    }
 
}
