<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Image;

class DepartmentController extends Controller
{
    public function addDepartment(){
        return view('admin.department.add-department');
    }

    public function manageDepartment(){
        $department = Department::all();
        return view('admin.department.manage-department',['departments'=>$department]);
    }

    public function saveDepartment(Request $request){
        $this->Validate($request, [
            'department_name'=>'required|regex:/^[\pL\s\-]+$/u|min:2|max:25',
            'department_title'=>'required',
            'department_description'=>'required',
            'department_image' =>'required|image',
            'publication_status'=>'required'
        ]);


        $departmentImage = $request->file('department_image');
        $imageName = $departmentImage->getClientOriginalName();
        $directory= 'department-image/';
        $imageURL= $directory.$imageName;
        Image::make($departmentImage)->save($imageURL);


        $department = new Department();
        $department->department_name = $request->department_name;
        $department->department_title = $request->department_title;
        $department->department_description = $request->department_description;
        $department->department_image = $imageURL;
        $department->publication_status = $request->publication_status;
        $department->save();

        return redirect('/add-department')->with('message', 'Department Info Saved Successfully');
    }

    public function unpublishedDepartment($id){
        $department = Department::find($id);
        $department->publication_status=0;
        $department->save();
        return redirect('/manage-department')->with('message', 'Department info unpublished');
    }

    public function publishedDepartment($id){
        $department = Department::find($id);
        $department->publication_status=1;
        $department->save();
        return redirect('/manage-department')->with('message', 'Department info published');
    }

    public function deleteDepartment($id){
        $department = Department::find($id);
        $department->delete();
        return redirect('/manage-department')->with('message', 'Department info deleted');
    }

    public function editDepartment($id){
        $department = Department::find($id);
        return view('admin.department.edit-department', ['department'=>$department]);

    }
    public function updateDepartment(Request $request){

        if($request->department_image){
            $department = Department::find($request->department_id);
            unlink($department->department_image);

            $departmentImage = $request->file('department_image');
            $imageName = $departmentImage->getClientOriginalName();
            $directory= 'department-image/';
            $imageURL= $directory.$imageName;
            Image::make($departmentImage)->save($imageURL);

            $department->department_name = $request->department_name;
            $department->department_title = $request->department_title;
            $department->department_description = $request->department_description;
            $department->department_image = $imageURL;
            $department->publication_status = $request->publication_status;
            $department->save();
            return redirect('/manage-department')->with('message', 'Department info updated');

        }else{
            $department = Department::find($request->department_id);
            $department->department_name = $request->department_name;
            $department->department_title = $request->department_title;
            $department->department_description = $request->department_description;
            $department->publication_status = $request->publication_status;
            $department->save();
            return redirect('/manage-department')->with('message', 'Department info updated');
        }



    }
}
