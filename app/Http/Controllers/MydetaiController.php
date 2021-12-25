<?php

namespace App\Http\Controllers;

use App\Models\Duyet;
use App\Models\Giangvien;
use App\Models\khoa;
use App\Models\Mydetai;
use App\Models\Nghiemthudanhgia;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class MydetaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mydetais=Mydetai::all();
        return view('admin.detai.mydetai')->with('mydetais',$mydetais);
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
        $mydetai=new Mydetai();
        $mydetai->fill($request->all());
        $mydetai->save();
        return redirect('/admin/duyet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mydetai  $mydetai
     * @return \Illuminate\Http\Response
     */
    public function show(Mydetai $mydetai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mydetai  $mydetai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $mydetai=Mydetai::find($id);
       $user=ModelsUser::find(auth()->user()->id);
       return view('Sinhvien.xingiahan',compact('mydetai','id','user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mydetai  $mydetai
     * @return \Illuminate\Http\Response
     */
    public function editnghiemthu($id)
    {
        $mydetai=Mydetai::find($id);
        $user=ModelsUser::find(auth()->user()->id);
        $giangviens=ModelsUser::where('role_id','3')->orWhere('role_id','4')->get();
        return view('nghiemthu.edit',['mydetai'=>$mydetai,'user'=>$user,'giangviens'=>$giangviens]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mydetai  $mydetai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mydetai=new Mydetai();
        $data=$request->all();
        $mydetaiid=$mydetai->find($id);
        $mydetaiid->msdt=$data['msdt'];
        $mydetaiid->tendetai=$data['tendetai'];
        $mydetaiid->thoigiandangky=$data['thoigiandangky'];
        $mydetaiid->thoigiannop=$data['thoigiannop'];
        $mydetaiid->save();
        return redirect('/admin/detai');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mydetai  $mydetai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mydetai=Duyet::find($id);
        $mydetai=Mydetai::find($id);
        $mydetai->delete();
        return redirect('Sinhvien/mydetai');
    }
}
