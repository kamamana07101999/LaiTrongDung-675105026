<?php

namespace App\Http\Controllers;

use App\Models\Detai;
use App\Models\Duyet;
use App\Models\khoa;
use App\Models\Mydetai;
use App\Models\User;
use Illuminate\Http\Request;

class DuyetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duyets=Duyet::all();
        $mydetais=Mydetai::all();
        $khoas=khoa::all();
        return view('admin.detai.duyet',compact('mydetais','duyets','khoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duyet=new Duyet();
        $duyet->fill($request->all());
        $duyet->save();
        return redirect('/Sinhvien/dangky');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duyet  $duyet
     * @return \Illuminate\Http\Response
     */
    public function show(Duyet $duyet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duyet  $duyet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mydetai=Duyet::find($id);
        $user=User::find(auth()->user()->id);
       return view('Sinhvien.mydetai',compact('mydetai','id','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Duyet  $duyet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duyet  $duyet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $duyet=Duyet::find($id);
        $duyet->delete();
        return redirect('/admin/duyet');
    }
}
