<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function getPackage()
    {
        //
        return view('clientPackageSearch',['package'=>'']);
    }

    public function showPackage()
    {
        //
        return view('clientPackageRes',['package'=>'']);
    }
}
