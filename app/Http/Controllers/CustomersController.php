<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Customer;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public  function show($id)
    {   $agency=Agency::find($id);
        $customers=Customer::all();
        $cars=Car::all();
        return view('show_users',compact('customers','agency','cars'));
    }
    public function add(Request $request,Agency $agency)
    {

    $customer=new Customer();
        $customer->name=$request->name;
        $customer->phone=$request->phone;
        $customer->address=$request->address;
        $agency->customers()->save($customer);

        return back();
    }
    public function delete(Agency $id,Customer $usid)
    {
        $agen=Agency::find($id);
        $usid->delete();
        return back();
    }
}
