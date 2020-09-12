<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, DateTime;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('grade')->get();
        return view('school.modules.grade.index',['grades'  => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('school.modules.grade.add');
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
            'makhoi' => 'required|unique:grade',            
            'tenkhoi' => 'required',     
        ],[
            'makhoi.required' => "Vui lòng nhập mã khối",
            'makhoi.unique' => "Mã khối đã tồn tại",
            'tenkhoi.required' => "Vui lòng nhập tên khối ",
            
            ]);
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        DB::table('grade')->insert($data);

        return redirect()->route('grade.index');
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
        $grade = DB::table('grade')->where('id',$id)->first();
 
        return view('school.modules.grade.edit',['grade' => $grade]);   
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
        $data = $request->except('_token');
        $data['updated_at'] = new DateTime;
        DB::table('grade')->where('id',$id)->update($data);

        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('grade')->where('id',$id)->delete();

        return redirect()->route('grade.index');
    }
}
