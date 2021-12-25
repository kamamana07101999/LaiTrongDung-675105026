<?php

namespace App\Http\Controllers;

use App\Models\khoa;
use Illuminate\Http\Request;

class KhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khoas=khoa::all();
        return view('admin.user.themsv')->with('khoas',$khoas);
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
     * @param  \App\Models\khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function show(khoa $khoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function edit(khoa $khoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, khoa $khoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(khoa $khoa)
    {
        //
    }
}
