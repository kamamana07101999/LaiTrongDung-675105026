<?php

namespace App\Http\Controllers;

use App\Models\Detai;
use App\Models\Duyet;
use App\Models\khoa;
use App\Models\User;
use Illuminate\Http\Request;

class DangkyDetaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dangkys=Detai::Search()->paginate(2);
        $users=User::all();
        // if($key=request()->key){
        //     $dangkys=Detai::where('tendetai','like','%'.$key.'%'); 
        // }
        
        return view('Sinhvien.dangky',compact('dangkys','users')); 
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
        $dangky=Detai::find($id);
        $user=User::find(auth()->user()->id);
        $khoas=khoa::all();
        return view('admin.detai.themdkdetai',compact('dangky','id','user','khoas'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
