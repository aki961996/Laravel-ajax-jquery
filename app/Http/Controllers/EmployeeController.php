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

    public function  employee_view(Request $request)
    {
        $id = $request->id;
        $id = Employee::find($id);
        if ($id) {
            return $id;
        } else {

            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'No id get!'
            ];
            return $response;
        }
    }

    public function employee_delete(Request $request)
    {


        $id = $request->id;

        $delete =  Employee::destroy($id);

        //   dd($delete);
        if ($delete) {
            $response = [
                'status' => 'ok',
                'success' => true,
                'message' => 'Record deleted succesfully!'
            ];
            return $response;
        } else {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record deleted failed!'
            ];
            return $response;
        }
    }

    public function employee_edit(Request $request)
    {

        $id = $request->employee_id;

        $update = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];

        $edit = Employee::where('id', $id)->update($update);
        if ($edit) {
            $response = [
                'status' => 'ok',
                'success' => true,
                'message' => 'Record updated succesfully!'
            ];
            return $response;
        } else {
            $response = [
                'status' => 'ok',
                'success' => false,
                'message' => 'Record updated failed!'
            ];
            return $response;
        }
    }
}
