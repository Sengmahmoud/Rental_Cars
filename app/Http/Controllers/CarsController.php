<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Car;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CarsController extends Controller
{
    public  function show($id)
    {   $agency=Agency::find($id);
        $cars=Car::all();
        return view('show_cars',compact('cars','agency'));
    }
    public function add(Request $request,Agency $agency)
    {$car=new Car();


                $car->customer_id = 0;

                $car->type = $request->type;
                $car->number = $request->number;
            $agency->cars()->save($car);

        return back();
    }
    public function edit($id,Car $car)
    {
        $agency=Agency::find($id);
        return view('car_edit',compact('car','agency'));
    }
    public function update($id,Car $car,Request $request)
    {
        $agency=Agency::find($id);
        $car->update($request->all());
        return redirect('home/'.$agency->id.'/Cars');
    }
  }
