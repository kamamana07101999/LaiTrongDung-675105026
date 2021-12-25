<?php

namespace App\Http\Controllers;

use App\Models\Mydetai;
use App\Models\User;
use App\Models\Xingiahan;
use Illuminate\Http\Request;

class XingiahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $xingiahan=new Xingiahan;
        $xingiahan->fill($request->all());
        $xingiahan->save();
        return redirect('Sinhvien/mydetai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Xingiahan  $xingiahan
     * @return \Illuminate\Http\Response
     */
    public function show(Xingiahan $xingiahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Xingiahan  $xingiahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $xingiahan=Xingiahan::find($id);
        $user=User::find(auth()->user()->id);
       
        return view('Sinhvien.duyetxingiahan',compact('xingiahan','id','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Xingiahan  $xingiahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xingiahan $xingiahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Xingiahan  $xingiahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $xingiahan=Xingiahan::find($id);
        $xingiahan->delete();
        return redirect('admin/Detai');
    }
}
