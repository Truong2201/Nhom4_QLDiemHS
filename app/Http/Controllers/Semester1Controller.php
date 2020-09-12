<?php

namespace App\Http\Controllers;

use App\LClass;
use App\Diem;
use App\Subject;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DateTime;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;
use Yajra\DataTables\Facades\DataTables;

class Semester1Controller extends Controller
{
    public function index(){
        DB::statement(DB::raw('set @rownum=0'));
        $student=DB::table('student')
            ->join('semester1','student.id','=','semester1.student_id')
            ->join('subject','semester1.student_id','=','subject.id')
            ->join('class','student.class_id','=','class.id')
            ->select([
                DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                'mahs',
                'hohs',
                'tenhs',
                'tenlop',
                'diemcc',
                'diemtx',
                'diemgk',
                'diemck',
                'mamon',
                'student.id AS sv_id',
                'semester1.id AS diem_id',
                'subject.id AS subject_id',
            ])->get();
        return view('school.modules.point.semester1.index',['student'=>$student]);
    }
    public function datajson(Request $request){
        $where = [];
        DB::statement(DB::raw('set @rownum=0'));
        $student=DB::table('student')
            ->leftJoin('semester1','student.id','=','semester1.student_id')
            ->leftJoin('subject','semester1.student_id','=','subject.id')
            ->leftJoin('class','student.class_id','=','class.id')
            ->select([
                DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                'mahs',
                'hohs',
                'tenhs',
                'malop',
                'diemcc',
                'diemtx',
                'diemgk',
                'diemck',
                'mamon',
                'student.id AS sv_id',
                'semester1.id AS semester1_id',
                'subject.id AS subject_id',
            ])->get();
        $datatables = DataTables::of($student)
            ->addColumn('hotenhs',function ($data){
                return $data->hohs." ".$data->tenhs;
            })
            ->rawColumns([ 'rownum','hotenhs']);
        if ($keyword = $request->get('search')['value']) {
            $datatables->filterColumn('rownum', 'whereRaw', '@rownum  + 1 like ?', ["%{$keyword}%"]);
        }
        return $datatables->make(true);
    }

    public function savediem(Request $request){
        $diemso =$_POST['diem'];
        $sv_id=$_POST['sv_id'];
        $monhoc_id=$_POST['subject_id'];
        $diem_id=$_POST['semester1_id'];
        $column=$_POST['column'];
        if ($diemso=="")
        {
            $diemso=null;
        }
        if($column=='diemcc')
        {
            $diem = Diem::find($semester1_id);
            $diem->diemcc=$diemso;
            $diem->student_id=$sv_id;
            $diem->subject_id=$subject_id;
            $diem->save();
            return Response::json([
                'error' => 1,
                'message' => 'Lưu thành công'
            ]);
        }
        if($column=='diemtx')
        {
            $diem = Diem::find($semester1_id);
            $diem->diemtx=$diemso;
            $diem->student_id=$sv_id;
            $diem->subject_id=$subject_id;
            $diem->save();
            return Response::json([
                'error' => 1,
                'message' => 'Lưu thành công'
            ]);
        }
        if($column=='diemgk')
        {
            $diem = Diem::find($semester1_id);
            $diem->diemgk=$diemso;
            $diem->student_id=$sv_id;
            $diem->subject_id=$subject_id;
            $diem->save();
            return Response::json([
                'error' => 1,
                'message' => 'Lưu thành công'
            ]);
        }
        if($column=='diemck')
        {
            $diem = Diem::find($semester1_id);
            $diem->diemck=$diemso;
            $diem->student_id=$sv_id;
            $diem->subject_id=$subject_id;
            $diem->save();
            return Response::json([
                'error' => 1,
                'message' => 'Lưu thành công'
            ]);
        }
        if($column=='diemthilai')
        {
            $diem = Diem::find($semester1_id);
            $diem->diemck=$diemso;
            $diem->student_id=$sv_id;
            $diem->subject_id=$subject_id;
            $diem->save();
            return Response::json([
                'error' => 1,
                'message' => 'Lưu thành công'
            ]);
        }

    }
    public function userindex(){
        DB::statement(DB::raw('set @rownum=0'));
        $student=DB::table('student')
            ->join('semester1','student.id','=','semester1.student_id')
            ->join('subject','semester1.student_id','=','subject.id')
            ->join('class','student.class_id','=','class.id')
            ->select([
                DB::raw('@rownum  := @rownum  + 1 AS rownum'),
                'mahs',
                'hohs',
                'tenhs',
                'malop',
                'diemcc',
                'diemtx',
                'diemgk',
                'diemck',
                'mamon',
                'student.id AS sv_id',
                'semester1.id AS diem_id',
                'subject.id AS subject_id',
            ])->get();
        return view('school.modules.point.semester1.edit',['student'=>$student]);
    }
 
    public function loadClass(Request $request){
        {
            $class_id = $request->class_id;
            $comment = DB::table('student')->where('class_id',$class_id)->orderBy('id','DESC')->get();
            $xhtml = '';
            foreach ($comment as $c){
                $xhtml.='<tr>
                        <td>'.$c->id.'</td>
                        <td>'.$c->mahs.'</td>
                        <td>'.$c->tenhs.'</td>
                        <td>'.$c->class_id.'</td>
                        <td>'.$c->diemcc.'</td>
                        <td>'.$c->diemtx.'</td>
                        <td>'.$c->diemgk.'</td>
                        <td>'.$c->diemck.'</td>
                        </tr>';
            }
            return $xhtml;
        }
    }

    public function loadSubject(Request $request){
        $subject_id = $request->subject_id;
        $class = DB::table('subject')->where('subject_id',$subject_id)->orderBy('id','DESC')->get();
        $xhml = '';
        foreach ($class as $c){
            $xhml .='<option value="'.$c->id.'">'.$c->tenlop.'</option>';
        }
        return $xhml;
    }

    public function add()
    {
        $student = Student::all();
        $class = LClass::all();
        $subject = Subject::all();

        return view('school.modules.point.semester1.add', ['classes' =>$class, 'student' => $student,'subject'=>$subject]);
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
            'madiem' => 'required|unique:semester1',
            'diemcc' => 'required|max:255',
            'diemtx' => 'required|max:255',
            'diemgk' => 'required',
            'diemck' => 'required',
            'diemtong' => 'required',
            'diemrl' => 'required',
            'HeSodiemcc' => 'required',
            'HeSodiemtx' => 'required',
            'HeSodiemgk' => 'required',
            'HeSodiemck' => 'required',       
            'student_id' => 'required',       
        ],[
            'madiem.required'=>'Vui lòng nhập mã điểm',
            'madiem.unique'=>'Mã này đã tồn tại',
            'diemcc.required'=>'Vui lòng nhập điểm chuyên cần',
            'diemtx.required'=>'Vui lòng nhập điểm thường xuyên',
            'diemcc.required'=>'Vui lòng nhập điểm chuyên cần',
            'diemgk.required'=>'Vui lòng nhập điểm giữa kỳ',
            'diemck.required'=>'Vui lòng nhập điểm cuối kỳ',
            'diemtong.required'=>'Vui lòng nhập điểm tổng',
            'diemrl.required'=>'Vui lòng nhập điểm rèn luyện',
            'HeSodiemcc.required'=>'Vui lòng nhập hsdcc',
            'HeSodiemtx.required'=>'Vui lòng nhập hsdtx',
            'HeSodiemgk.required'=>'Vui lòng nhập hsdgk',
            'HeSodiemck.required'=>'Vui lòng nhập hsdck',
            'student_id.required'=>'Vui lòng chọn học sinh',
            ]);

        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new DateTime;
        $data['updated_at'] = new DateTime;
        DB::table('semester1')->insert($data);
        

        return redirect()->route('semester1.index');
    }
}
