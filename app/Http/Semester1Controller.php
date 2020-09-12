<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, DateTime;
class Semester1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function class()
    {
        $data = DB::table('semester1')->get();
        return view('school.modules.point.semester1.class',['semester1s'  => $data]);
    }

    public function student()
    {
        $data = DB::table('semester1')->get();
        return view('school.modules.point.semester1.student',['semester1s'  => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('school.modules.point.semester1.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token', 'example1_length');
        // dd($data);
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        DB::table('semester1')->insert($data);

        return redirect()->route('semester1.class');
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
}
