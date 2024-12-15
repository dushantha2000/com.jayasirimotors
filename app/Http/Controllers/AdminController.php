<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Controllers\AdminController;
use App\Models\company;



class AdminController extends Controller
{

    public function view_service()
    {
        return view('admin.service');

    }

    public function add_service(Request $Request)
    {
        $service= new service;

        $service->service_name=$Request->service_name;

        $service->description=$Request->description;

        $service->Hours=$Request->hours;

        $image=$Request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $Request->image->move('service',$imagename);

        $service->image=$imagename;

        

        $service->save();
        return redirect()->back()->with('message','Service Added Successfully..');

    }

    public function show_service()
{
    $services = service::all(); 
    return view('admin.show_service', compact('services'));
}

public function show_Company()
{
    $companies = company::all(); 
    return view('admin.show_company', compact('companies'));
}

    
    public function view_catagory()
    {
        $services = service::all(); 
        return view('admin.catagory', compact('services'));
        

    }
    public function delete_service($id)
    {
        $services=service::find($id);
        $services->delete();
        return redirect()->back()->with('message','Service delete Successfully... ');
        
    }

    public function update_service($id)
    {
        $services=service::find($id);

        return view('admin.update_service',compact('services'));
    }
    public function update_service_confirm(Request $Request,$id)
    {
        $services=service::find($id);

        $services->service_name=$Request->service_name;

        $services->Hours=$Request->hours;

        $services->description=$Request->description;

        $image=$Request->image;


        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $Request->image->move('service',$imagename);

            $services->image=$imagename;

        }

        

        $services->save();

        return redirect()->back();

    }

}
