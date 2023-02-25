<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function store(Request $request)
    {
        // $employees = new Employee([
        //     'name' => $request('name'),
        //     'email' => $request('email'),
        //     'password' => $request('password'),
        // ]);
        // $employees->save();
        // return response()->json('Employees create success');
        Employee::create($request->all());
        return response()->json('Employees create success');
    }
    public function show($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }
    public function update(Request $request, $id)
    {
        $employees = Employee::find($id);
        $employees->update($request->all());
        return response()->json('Employees update success');
    }
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json('Employees delete success');
    }
}
