<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\khoa;

class UsermanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $users=User::Where('role_id','2',auth()->user()->id)->paginate(10);
    
        return view('admin.user.list',compact('users')); 

        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khoas=khoa::all();
        return view('admin.user.create')->with('khoas',$khoas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User;
        $user->fill($request->all());
        $user->save();
        return redirect('admin/user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        $khoas=khoa::all();
        return view('admin.user.edit',compact('user','id','khoas'));
        
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
        $user= new User;
        $data=$request->all();
        $userid=$user->find($id);
        $userid->name=$data['name'];
        $userid->masv=$data['masv'];
        $userid->tenkhoa=$data['tenkhoa'];
        $userid->email=$data['email'];
        $userid->save();
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('/admin/user');
    }
}
