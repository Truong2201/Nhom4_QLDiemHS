<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\LClass;
use App\Student;
use DB, DateTime;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Student::find(1);
        $data = Student::orderBy('id','DESC')->get();
        // $class = DB::table('class')->get(); 

        return view('school.modules.student.index',['students'  => $data]);
    }

    public function indexkl()
    {
        
        $data = Student::orderBy('id','DESC')->get();
        $class = DB::table('class')->get();
        $grade = DB::table('grade')->get();
        return view('school.modules.student.indexkl',['students'  => $data],['class' => $class,'grade' => $grade ]);
    }
    // gradesearch
    public function loadGrade(Request $request){
       $grade = $request->grade;
       $class = DB::table('class')->where('grade_id',$grade)->orderBy('id','DESC')->get();
       $xhml = '';
       foreach ($class as $c){
           $xhml .='<option value="'.$c->id.'">'.$c->tenlop.'</option>';
       }
       return $xhml;
    }

    public function loadClass(Request $request){
        // $class = $request -> class;
        // $student = DB::table('student')->where('class_id',$class)->get();
        // $xhml = '';
        // foreach ($student as $s){
        //     $xhml .='<option value="'.$s->id.'">'.$s->hohs.''.$s->tenhs.'</option>';
        // }
        // return $xhml;
        {
            $class_id = $request->class_id;
            $comment = DB::table('student')->where('class_id',$class_id)->orderBy('id','DESC')->get();
            $xhtml = null;
            foreach ($comment as $c){
                $xhtml.='<tr><td>'.$c->id.'</td>
                        <td>'.$c->mahs.'</td>
                        <td>'.$c->hohs.'</td>
                        <td>'.$c->tenhs.'</td>
                        <td>'.$c->gioitinh.'</td>
                        <td>'.$c->ngaysinh.'</td>
                        <td>'.date("d/m/Y-h:i:s",strtotime($c->created_at)).'</td>';
            }
            return $xhtml;
        }
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $grade = Grade::all();
        $class = LClass::all();

        return view('school.modules.student.add', ['classes' =>$class, 'grades' => $grade]);
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
            'mahs' => 'required|unique:student',
            'hohs' => 'required|max:255',
            'tenhs' => 'required|max:255',
            'gioitinh' => 'required',
            'hotencha' => 'required',
            'nghenghiepcha' => 'required',
            'hotenme' => 'required',
            'nghenghiepme' => 'required',
            'ngaysinh' => 'required',
            'quequan' => 'required',
            'class_id' => 'required',            
        ],[
            'mahs.required'=>'Vui lòng nhập họ tên',
            'mahs.unique'=>'Mã này đã tồn tại',
            'hohs.required'=>'Vui lòng nhập họ của học sinh',
            'hohs.max'=>'Không được phép quá 255 kí tự',
            'tenhs.required'=>'Vui lòng nhập tên học sinh',
            'tenhs.max'=>'Không được phép quá 255 kí tự',
            'phone.required'=>'Vui lòng nhập sdt để tiện liên hệ',
            'ngaysinh.required'=>'Vui lòng chọn ngày sinh',
            'quequan.required'=>'Vui lòng nhập quê quán',
            'hotencha.required'=>'Vui lòng nhập họ tên cha',
            'nghenghiepcha.required'=>'Vui lòng nhập nghề nghiệp cha',
            'hotenme.required'=>'Vui lòng nhập họ tên mẹ',
            'nghenghiepme.required'=>'Vui lòng nhập nghề nghiệp mẹ',
            'class_id.required'=>'Vui lòng chọn lớp',
            ]);

        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        DB::table('student')->insert($data);
        

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prod = DB::table('student')->get();

        return view('student.dashboard',['student'=>$student]);
    }

    public function dashboard(Request $REQUEST)
    {
        $student = DB::table('student')->where('id',$id)->first();
 
        return view('school.modules.student.dashboard',['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::table('student')->where('id',$id)->first();
        $grade = Grade::all();
        $class = LClass::all();

        return view('school.modules.student.edit',['student' => $student], ['classes' => $class, ]);  
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
            'mahs' => 'required|unique:student',                     
        ]);
        $data = $request->except('_token');
        $data['updated_at'] = new DateTime;
        DB::table('student')->where('id',$id)->update($data);

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('student')->where('id',$id)->delete();

        return redirect()->route('student.index');
    }

    public function detail($id)
    {
        $student = DB::table('student')->where('id',$id)->first();
        $class = LClass::all();
 
        return view('school.modules.student.detail',['student' => $student, 'class' => $class]);
    }
}
