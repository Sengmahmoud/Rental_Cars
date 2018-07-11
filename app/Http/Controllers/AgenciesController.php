<?php

namespace App\Http\Controllers;

use App\Agency;
use Illuminate\Http\Request;
use DB;

class AgenciesController extends Controller
{
public function show()
{
    $agencies=Agency::all();
    return view('show_agences',compact('agencies'));

}
    public function store(Request $request)
    {
        $agnecy=new Agency();
        $agnecy->name=$request->name;
        $agnecy->save();
        return back();

    }
    public function show_one_agency(Agency $id)
    {
        return view('one_agency',compact('id'));
    }
public function delete(Agency $id)
{
    $id->delete();
    return back();
}
}
