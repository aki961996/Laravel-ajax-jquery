<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function  employee_list()
    {

        return Employee::all();
        
    }


    public function employeeAdd(Request $request)
    {
        $insert = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];


        $add = Employee::create($insert);
        if ($add) {
            $response = [
                'status' => 'ok',
                'success' => true,
                'message' => 'Record created succesfully!'
            ];
            return $response;
        } else {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record created failed!'
            ];
            return $response;
        }
    }
}
