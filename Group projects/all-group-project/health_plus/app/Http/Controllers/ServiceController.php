<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function addService(){
      return view('admin.service.add-service');
  }

  public function manageService(){
      $service = Service::all();
      return view('admin.service.manage-service',['services'=>$service]);
  }

  public function saveService(Request $request){
      $this->Validate($request, [
          'service_title'=>'required',
          'service_name'=>'required|regex:/^[\pL\s\-]+$/u|min:2|max:25',
          'service_description'=>'required',
          'publication_status'=>'required'
      ]);


      $service = new Service();
      $service->service_title = $request->service_title;
      $service->service_name = $request->service_name;
      $service->service_description = $request->service_description;
      $service->publication_status = $request->publication_status;
      $service->save();

      return redirect('/add-service')->with('message', 'Service Info Saved Successfully');
  }

    public function unpublishedService($id){
        $service = Service::find($id);
        $service->publication_status=0;
        $service->save();
        return redirect('/manage-service')->with('message', 'Service info unpublished');
    }

    public function publishedService($id){
        $service = Service::find($id);
        $service->publication_status=1;
        $service->save();
        return redirect('/manage-service')->with('message', 'Service info published');
    }

    public function deleteService($id){
        $service = Service::find($id);
        $service->delete();
        return redirect('/manage-service')->with('message', 'Service info deleted');
    }

    public function editService($id){
        $service = Service::find($id);
        return view('admin.service.edit-service', ['service'=>$service]);

    }
    public function updateService(Request $request){
        $service = Service::find($request->service_id);
        $service->service_title = $request->service_title;
        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->publication_status = $request->publication_status;
        $service->save();

        return redirect('/manage-service')->with('message', 'Service info updated');
    }
}
