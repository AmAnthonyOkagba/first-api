<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Validator;

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

    function update(Request $request)
    {
        $device = Device::find($request->id);
        $device->name=$request->name;
        $device->member_id=$request->member_id;
        $result=$device->save();

        if($result){
            return ["Result"=>"Data has been Updated "];
        }else{
            return ["Result"=>"Data did not Updated "];
        }
    }

    function search($name)
    {
        return $result= Device::where("name", "like", "%". $name. "%")->get();
        // ($result){
        //     return ["Result"=>"No name found"];
        // }
    }

    function delete($id)
    {
        $device = Device::find($id);
        $result = $device->delete();
        
        if($result){
            return ["Result"=>"Data has been deleted "];
        }else{
            return ["Result"=>"Data did not deleted "];
        }
    }

}
