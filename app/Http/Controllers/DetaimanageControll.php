<?php

namespace App\Http\Controllers;

use App\Models\Detai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mydetai;
use App\Models\Xingiahan;

class DetaimanageControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detais=Detai::paginate(2);
        $mydetais= Mydetai::Search()->paginate(2);
        $xingiahans=Xingiahan::paginate(2);
        // if($key=request()->key){
        //     $detais=Detai::Where('msdt','like','%'.$key.'%'); 
        // }
        return view('admin.detai.list',['detais'=>$detais,'mydetais'=>$mydetais,'xingiahans'=>$xingiahans]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.detai.edting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $detai=new Detai;
        $detai->fill($request->all());
        $detai->save();
        return redirect('/admin/Detai');
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
        $detai=Detai::find($id);
        return view('admin.detai.edit',compact('detai','id'));
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
        $detai=new Detai;
        $data=$request->all();
        $detaiid=$detai->find($id);
        $detaiid->msdt=$data['msdt'];
        $detaiid->tendetai=$data['tendetai'];
        $detaiid->thoigiandangky=$data['thoigiandangky'];
        $detaiid->thoigiannop=$data['thoigiannop'];
        $detaiid->linhvuc=$data['linhvuc'];
        $detaiid->save();
        return redirect('/admin/Detai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detai=Detai::find($id);
     
        $detai->delete();
        
        return redirect('/admin/Detai');

    }
}
