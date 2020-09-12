<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, DateTime;

class Semester2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function class()
    {
        $data = DB::table('semester2')->get();
        return view('school.modules.point.semester2.class',['semester2s'  => $data]);
    }

    public function student()
    {
        $data = DB::table('semester2')->get();
        return view('school.modules.point.semester2.student',['semester2s'  => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('school.modules.point.semester2.add');
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
        DB::table('semester2')->insert($data);

        return redirect()->route('semester2.class');
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
        $semester2 = DB::table('semester2')->where('id',$id)->first();
 
        return view('school.modules.point.semester2.edit',['semester2' => $semester2]);
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
        $data = $request->except('_token', 'example1_length');
        $data['updated_at'] = new DateTime;
        DB::table('semester2')->where('id',$id)->update($data);

        return redirect()->route('semester2.class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('semester2')->where('id',$id)->delete();

        return redirect()->route('semester2.class');
    }
}
