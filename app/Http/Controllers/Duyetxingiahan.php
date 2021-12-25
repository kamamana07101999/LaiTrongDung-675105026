<?php

namespace App\Http\Controllers;

use App\Models\Mydetai;
use App\Models\User;
use Illuminate\Http\Request;

class Duyetxingiahan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mydetai=Mydetai::find($id);
       $user=User::find(auth()->user()->id);
       return view('Sinhvien.duyetxingiahan',compact('mydetai','id','user'));
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
        $mydetai=new Mydetai;
        $data=$request->all();
        $mydetaiid=$mydetai->find($id);
        $mydetaiid->msdt=$data['msdt'];
        $mydetaiid->tendetai=$data['tendetai'];
        $mydetaiid->linhvuc=$data['linhvuc'];
        $mydetaiid->thoigiandangky=$data['thoigiandangky'];
        $mydetaiid->thoigiannop=$data['thoigiannop'];
        $mydetaiid->save();
        return redirect('/admin/mydetai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mydetai=Mydetai::find($id);
        $mydetai->delete();
        return redirect('/admin/Detai');
    }
}
