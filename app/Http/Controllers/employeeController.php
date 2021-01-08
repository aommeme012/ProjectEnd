<?php

namespace App\Http\Controllers;
use App\Departments;
use App\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        $emps = Employee::all();
        return view('employee.employees', compact('emps'));
    }
    public function create()
    {
        $deps = Departments::all();
        return view('employee.add_employees', compact('deps'));
    }
    public function store(Request $request)
    {
        //return "hi";
        $post=$request->all();
        Employee::create($post);
        return back();
    }
    public function show(Employee $Employee)
    {
        //
    }
    public function edit($id)
    {
        $emp = Employee::find($id);
        $deps = Departments::all();
        return view('employee.edit_employees',compact('emp','deps'));
    }
    public function update(Request $request, $id)
    {
        $update=Employee::findorFail($id);
        $update->update($request->all());

        return redirect('/emp');
    }
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect('/emp');
    }
}
