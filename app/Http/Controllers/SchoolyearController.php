<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, DateTime;
class SchoolyearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('schoolyear')->get();
        return view('school.modules.schoolyear.index',['schoolyear'  => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('school.modules.schoolyear.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mahanhkiem' => 'required|unique:schoolyear',             
        ],[
            'mahanhkiem.required' => "Vui lòng nhập mã năm học",
            'mahanhkiem.unique' => "Mã năm học dùng đã tồn tại",
            ]);
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        
        DB::table('schoolyear')->insert($data); 
        return redirect()->route('schoolyear.index');
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
        
        $schoolyear = DB::table('schoolyear')->where('id',$id)->first();

        return view('school.modules.schoolyear.edit',['schoolyear' => $schoolyear]);
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
        DB::table('schoolyear')->where('id',$id)->delete();
        $data['updated_at'] = new DateTime;
        DB::table('schoolyear')->where('id',$id)->update($data);

        return redirect()->route('schoolyear.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('schoolyear')->where('id',$id)->delete();

        return redirect()->route('schoolyear.index');
    }
}
