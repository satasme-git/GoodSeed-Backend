<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Member;
use DB;
use Hash;
use Illuminate\Http\Request;

class MemberController extends Controller
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

        /* Inserting into the member table */
        $id = DB::table('members')->insertGetId([
            'email' => $request->get('email'),
            'status' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        $login = new Login;
        $login->email = $request->get('email');
        $login->password = Hash::make($request->get('password'));
        $login->member_id = $id;
        $login->save();
        $usersendData = array(
            'userid' => $id,
            'email' => $request->get('email'),
        );
        return json_encode($usersendData);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function viewMmber()
    {
        return view("Member.Member");
    }
    public function memberBasicdetails(Request $request, $id){
        $member = Member::find(1);
        $member->name =$request->get('name');
        $member->dob =$request->get('dob');
        $member->grade =$request->get('grade');
        $member->class_number =$request->get('class_number');
        $member->height =$request->get('height');
        $member->weight =$request->get('weight');
        $member->waist_size =$request->get('waist_size');
        $member->parent_name =$request->get('parent_name');

        $member->save();
   
    }
}
