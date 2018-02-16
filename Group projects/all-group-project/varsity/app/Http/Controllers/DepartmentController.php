<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('admin.department.add-department');
    }
    public function manageDepartment(){
        $departments = Department::all();
        return view('admin.department.manage-department', ['departments'=>$departments]);
    }
    public function saveDepartment(Request $request){
        $this->Validate($request, [
            'department_name'=>'required',
            'department_description'=>'required'
        ]);

        $department = new Department();
        $department->department_name = $request->department_name;
        $department->department_description = $request->department_description;
        $department->publication_status = $request->publication_status;
        $department->save();
        return redirect('/department/add-department')->with('message', 'Department info saved successfully');
    }
    public function unpublishedDepartment($id){
        $department = Department::find($id);
        $department->publication_status=0;
        $department->save();
        return redirect('/department/manage-department')->with('message', 'Department info unpublished');
    }
    public function publishedDepartment($id){
        $department = Department::find($id);
        $department->publication_status=1;
        $department->save();
        return redirect('/department/manage-department')->with('message', 'Department info published');
    }
    public function deleteDepartment($id){
        $department = Department::find($id);
        $department->delete();
        return redirect('/department/manage-department')->with('message', 'Department info deleted');
    }
    public function editDepartment($id){
        $department = Department::find($id);
        return view('admin.department.edit-department', ['department'=>$department]);
    }
    public function updateDepartment(Request $request){
        $department = Department::find($request->department_id);
        $department->department_name = $request->department_name;
        $department->department_description = $request->department_description;
        $department->publication_status = $request->publication_status;
        $department->save();
        return redirect('/department/manage-department')->with('message', 'Department info updated');
    }
}
