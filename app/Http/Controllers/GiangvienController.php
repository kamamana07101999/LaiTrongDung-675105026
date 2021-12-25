<?php

namespace App\Http\Controllers;

use App\Models\Giangvien;
use App\Models\khoa;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class GiangvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giangviens=User::Where('role_id','3',auth()->user()->id)->paginate(10);
    
      

        return view('giangvien.list')->with('giangviens',$giangviens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khoas=khoa::all();
        return view('giangvien.them')->with('khoas',$khoas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $giangvien=new Giangvien;
        $giangvien->fill($request->all());
        $giangvien->save();
        return redirect('admin/giangvien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function show(Giangvien $giangvien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $giangvien=User::find($id);
        $khoas=khoa::all();
        return view('giangvien.edit',compact('giangvien','id','khoas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user= new User;
        $data=$request->all();
        $userid=$user->find($id);
        $userid->name=$data['name'];
        $userid->tenkhoa=$data['tenkhoa'];
        $userid->email=$data['email'];
        $userid->save();
        return redirect('/admin/giangvien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $giangvien=User::find($id);
        $giangvien->delete();
        return redirect('/admin/giangvien');
    }
}
