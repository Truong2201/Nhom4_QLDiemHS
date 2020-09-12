<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Schoolyear;
use App\LClass;
use App\LTeacher;
use DB, DateTime;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = DB::table('grade')->get();
        $teacher = DB::table('teachers')->get();
        $data = LClass::get();

        
        return view('school.modules.class.index',['classes'  => $data,'grade' => $grade, 'teachers' => $teacher]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $grade = Grade::all();
        $teacher = LTeacher::all();
        $schoolyear = Schoolyear::all();

        return view('school.modules.class.add',['grades' => $grade,'schoolyear' => $schoolyear,'teachers' => $teacher]); 
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
            'malop' => 'required|unique:class',            
            'tenlop' => 'required|unique:class',   
            'grade_id' => 'required',  
        ],[
            'malop.required' => "Vui lòng nhập mã lớp",
            'malop.unique' => "Mã lớp đã tồn tại",
            'tenlop.required' => "Vui lòng nhập tên lớp",
            'tenlop.unique' => "Tên lớp đã tồn tại",
            'grade_id.required' => "Vui lòng chọn khối",
            ]);
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        DB::table('class')->insert($data);

        return redirect()->route('class.index');
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
        $class = DB::table('class')->where('id',$id)->first();
        $teacher = DB::table('teachers')->get();
        $grade = DB::table('grade')->get();
        $schoolyear = DB::table('schoolyear')->get();
        return view('school.modules.class.edit',['classes' => $class,'grades' => $grade,'schoolyear' => $schoolyear,'teachers' => $teacher]);  
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
        DB::table('class')->where('id',$id)->update($data);

        return redirect()->route('class.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('class')->where('id',$id)->delete();

        return redirect()->route('class.index');
    }
}
