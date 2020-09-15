<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function getPackage()
    {
        //
        return view('clientPackageSearch');
    }

    public function showPackage()
    {
        //
        return view('clientPackageRes',['package'=>'']);
    }

    public function RetrivePackage()
    {
        //
        return view('clientPackageRes',['package'=>'']);
    }
}
