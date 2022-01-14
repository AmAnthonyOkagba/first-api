<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class deviceController extends Controller
{
    function list($name=null)
    {
        return $name?Device::find($name):Device::all();
    }

    function add(Request $request)
    {
        $device = new Device();
        $device->name=$request->name;
        $device->member_id=$request->member_id;
        $result=$device->save();

        if($result){
            return ["Result"=>"Data has been saved "];
        }else{
            return ["Result"=>"Data did not saved "];
        }
    }
}
