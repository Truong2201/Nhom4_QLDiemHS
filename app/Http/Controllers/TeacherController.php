<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;
use DB, DateTime;
class TeacherController extends Controller
{
    public function index()
    {
        $data = Teacher::orderBy('id','DESC')->get();
        // $class = DB::table('class')->get(); 

        return view('school.modules.teacher.index',['teachers'  => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        // $subject = Subject::all('tenmon','id');
         $subject = DB::table('subject')->select('id','tenmon')->get();
        return view('school.modules.teacher.add', ['subjects' => $subject]);
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
            'tengiaovien' => 'required|max:255',
            'gioitinh' => 'required',
            'ngaysinh' => 'required',          
            'diachi' => 'required',
            'gmail' => 'required|unique:teachers',
            'sdt' => 'required|unique:teachers',
            'ngaytuyendung' => 'required',
            'sub_id' => 'required',         
        ],[
            'tengiaovien.required'=>'Vui lòng nhập họ tên',
            'tengiaovien.max'=>'Không được phép quá 255 kí tự',
            'ngaysinh.required'=>'Vui lòng chọn ngày sinh',   
            'diachi.required'=>'Vui lòng nhập địa chỉ',
            'gmail.required'=>'Vui lòng nhập email liên hệ',
            'gmail.unique'=>'Email này đã tồn tại',
            'sdt.required'=>'Vui lòng nhập sdt liên hệ',
            'sdt.unique'=>'Số điện thoại này đã tồn tại',
            //'phone.interger'=>'Số điện thoại phải là số nguyên',
            'ngaytuyendung.required'=>'Vui lòng chọn ngày tuyển dụng',            
            'sub_id.required'=>'Vui lòng chọn môn học',
        ]);
        
        $data = $request->except('_token');
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        DB::table('teachers')->insert($data);

        return redirect()->route('teacher.index');
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
        
        $teacher = DB::table('teachers')->where('id',$id)->first();
        $subject = Subject::all();

        return view('school.modules.teacher.edit', ['subjects' => $subject, 'teacher' => $teacher ]);  
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
        $validatedData = $request->validate([
            'tengiaovien' => 'required|max:255',
            'gioitinh' => 'required',
            'ngaysinh' => 'required',          
            'diachi' => 'required',
            'gmail' => 'required',
            'sdt' => 'required',
            'ngaytuyendung' => 'required',
            'sub_id' => 'required',                                     
        ],[
            'tengiaovien.required'=>'Vui lòng nhập họ tên',
            'tengiaovien.max'=>'Không được phép quá 255 kí tự',
            'ngaysinh.required'=>'Vui lòng chọn ngày sinh',   
            'diachi.required'=>'Vui lòng nhập địa chỉ',
            'gmail.required'=>'Vui lòng nhập email liên hệ',
            'sdt.required'=>'Vui lòng nhập sdt liên hệ',
            //'phone.interger'=>'Số điện thoại phải là số nguyên',
            'ngaytuyendung.required'=>'Vui lòng chọn ngày tuyển dụng',            
            'sub_id.required'=>'Vui lòng chọn môn học',
        ]);
        $data = $request->except('_token');
        $data['updated_at'] = new DateTime;
        DB::table('teachers')->where('id',$id)->update($data);

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('teachers')->where('id',$id)->delete();

        return redirect()->route('teacher.index');
    }
}
