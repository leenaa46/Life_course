<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Get all Employees.
     *
     * @return json
     */
    public function index()
    {
        $employees = Employee::all();

        return response()->json([
            'error' => false,
            'data' => $employees
        ]);
    }

    /**
     * Create Employee.
     *
     * @return json
     */
    public function store(EmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->save();

        return response()->json([
            'error' => false,
            'data' => $employee
        ]);
    }

    /**
     * Create Employee.
     *
     * @return json
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        // $employee =  Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->save();

        return response()->json([
            'error' => false,
            'data' => $employee
        ]);
    }

    /**
     * Create Employee.
     *
     * @return json
     */
    public function destroy(Employee $employee)
    {
        // $employee =  Employee::findOrFail($id);
        $employee->delete();

        return response()->json([
            'error' => false,
            'data' => $employee
        ]);
    }

    /**
     * Create Employee.
     *
     * @return json
     */
    public function show(Employee $employee)
    {
        return response()->json([
            'error' => false,
            'data' => $employee
        ]);
    }
}
