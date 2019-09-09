<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    
    public function createDepartment(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $department = new Department();
        $department->name = $data['department_name'];
        $department->description = $data['description'];
        $department->url = $data['url'];
        $department->save();

        if(!$department){
            return back()->with('error' , 'unable to complete process');
        }
        return back()->with('sucess' , 'department created');
    }

    public function  deleteDepartment(Department $id)
    {
            $department = Department::find($id);
            $department->destroy();
            if(!$department)
            {
                return back()->with('error' , 'unable to delete department' );
            }
            return back()->with('success'  , 'department deleted');
    }
}
