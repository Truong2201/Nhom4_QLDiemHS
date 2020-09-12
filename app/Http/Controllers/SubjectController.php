<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use DB, DateTime;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('subject')->get();
        return view('school.modules.subject.index',['subjects'  => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('school.modules.subject.add');
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
            'mamon' => 'required|unique:subject',            
            'tenmon' => 'required|unique:subject',   
            'sotiet' => 'required',  
        ],[
            'mamon.required' => "Vui lòng nhập mã môn",
            'mamon.unique' => "Mã môn đã tồn tại",
            'tenmon.required' => "Vui lòng nhập tên môn",
            'tenmon.unique' => "Tên môn đã tồn tại",
            'sotiet.required' => "Vui lòng nhập số tiết",
            ]);
        $data =($request->except('_token'));
        $data['created_at'] = new DateTime();
        $data['updated_at'] = new DateTime();
        // dd($data);
         DB::table('subject')->insert($data); 

         return redirect()->route('subject.index');
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
        $subject = DB::table('subject')->where('id',$id)->first();

        return view('school.modules.subject.edit',['subjects' => $subject]);
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
        $data['updated_at'] = new DateTime();
        DB::table('subject')->where('id',$id)->update($data); 

        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('subject')->where('id',$id)->delete();
         
        return redirect()->route('subject.index');
    }
}
