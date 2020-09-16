<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('package/updateState',['packages'=>Package::all(),'states'=>\App\State::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // dd(\App\State::all());
        // $states=;
        return view('package/create',['states'=>\App\State::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
          'code'=>'required',
          'customer'=>'required',
          'phone'=>'required',
          'desc'=>'required',
        ]);
        $p = new Package();
        // dd($data['code']);
        // $p->fill($data);
        $p->code=$data["code"];
        $p->customer=$data["customer"];
        $p->phone=$data["phone"];
        $p->description=$data["desc"];
        if($request['state']!='0')
          $p->state_id=$request["state"];
        $p->save();

        $request->session()->flash('state','sucess');
        return redirect()->route('packages.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $p = Package::find($id);
        return view('clientPackageRes',['package'=>$p]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    public function UpdateState(Request $request){
      $data = $request->validate([
        'package'=>'required|numeric',
        'state'=>'required|numeric',
      ]);
      $p = Package::find($data['package']);
      // dd($data['code']);

      $p->state_id=$request["state"];
      $p->save();

      $request->session()->flash('state','sucess');
      return redirect()->route('packages.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
