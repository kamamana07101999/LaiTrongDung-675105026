<?php

namespace App\Http\Controllers;

use App\Models\Nghiemthudanhgia;
use App\Models\User;
use Illuminate\Http\Request;

class NghiemthudanhgiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nghiemthudanhgias=Nghiemthudanhgia::Search()->paginate(10);
        return view('nghiemthu.list')->with('nghiemthudanhgias',$nghiemthudanhgias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $giangviens=User::where('role_id','3',auth()->user()->id);
        return view('nghiemthu.edit',['giangviens'=>$giangviens]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nghiemthudanhgia= new Nghiemthudanhgia;
        $nghiemthudanhgia->fill($request->all());
        $nghiemthudanhgia->save();
        return redirect('admin/detai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nghiemthudanhgia  $nghiemthudanhgia
     * @return \Illuminate\Http\Response
     */
    public function show(Nghiemthudanhgia $nghiemthudanhgia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nghiemthudanhgia  $nghiemthudanhgia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nghiemthudanhgia=Nghiemthudanhgia::find($id);
        return view('Giangvien.chamdiem',compact('nghiemthudanhgia','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nghiemthudanhgia  $nghiemthudanhgia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $nghiemthudanhgia=new Nghiemthudanhgia;
        $data=$request->all();
        $nghiemthudanhgiaid=$nghiemthudanhgia->find($id);
        $nghiemthudanhgiaid->diemso=$data['diemso'];
        $nghiemthudanhgiaid->save();
        return redirect('giangvien/phancong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nghiemthudanhgia  $nghiemthudanhgia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nghiemthudanhgia=Nghiemthudanhgia::find($id);
        $nghiemthudanhgia->delete();
        return redirect('admin/nghiemthu');
    }
}
