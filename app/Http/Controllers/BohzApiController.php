<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BohzApiController extends Controller
{
    function getapi()
    {
        return ['name'=>'bohz'];
    }
}
