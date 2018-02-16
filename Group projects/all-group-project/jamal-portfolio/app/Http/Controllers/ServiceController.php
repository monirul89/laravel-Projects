<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('admin.service.add-service');
    }
    public function saveService(Request $request){
        $service = new Service();

        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->publication_status = $request->publication_status;
        $service->save();

        return redirect('/service/add-service')->with('message','Service info save successsfully');
    }
    public function manageService(){
        $services = Service::all();
        return view('admin.service.manage-service',['services'=>$services]);
    }
    public function unpublishedService($id){
        $service = Service::find($id);
        $service->publication_status = 0;
        $service->save();

        return redirect('/service/manage-service')->with('message','Service info Unpublished');
    }

    public function publishedService($id){
        $service = Service::find($id);
        $service->publication_status = 1;
        $service->save();

        return redirect('/service/manage-service')->with('message','Service info Published');
    }

    public function editService($id){
        $service = Service::find($id);
        return view('admin.service.edit-service',['service'=>$service]);

    }

    public function updateService(Request $request){
        $service = Service::find($request->service_id);
        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->publication_status = $request->publication_status;
        $service->save();

        return redirect('/service/manage-service')->with('message','Service info Updated');
    }

    public function deleteService($id){
        $service = Service::find($id);
        $service->delete();

        return redirect('/service/manage-service')->with('message','Service info deleted');
    }
}
