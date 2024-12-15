<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Service;
use App\Models\company;


class HomeController extends Controller

{
    public function showServicepage()
{
    $services = Service::all();
    return view('home.userpage', compact('services'));
}

    public function showAboutPage()
    {
        return view('home.about.aboutuserpage');
    }

    public function index()
{ 
    $services = Service::paginate(3);   
    return view('home.userpage', compact('services'));
}
    public function service_details($id)
    {
        $services=service::find($id);
        return view('home.service_details', compact('services'));
    }


    public  function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $services = Service::paginate(3);   
               return view('home.userpage', compact('services'));
        }
    }

    public function appointment_dts($id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $serivces=serive::find($id);
            $appointments=new appointments;

            $appointments->service_name=$user->service_name;
            $appointments->user_id=$user->name;
            $appointments->phone=$user->phone;
            

        }
        else
        {
            return redirect('login');

        }
    }
    public function company_register()
    {
        
        return view('home.company');
    }


    public function add_company(Request $request)
{
    $company = new Company; // Assuming 'Company' is your model name

    $company->company_name = $request->company_name;
    $company->company_email = $request->company_email;
    $company->company_phone = $request->company_phone;
    $company->company_address = $request->company_address;

    $company->save();

    return redirect()->back()->with('message', 'Service Added Successfully..');
}

}
