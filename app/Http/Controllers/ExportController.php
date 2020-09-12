<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Student;
class ExportController extends Controller implements FromCollection, WithHeadings
{
    use Exportable;
    public function collection()
    {
        $student = Student::all();
        foreach ($student as $row) {
            $student[] = array(
                '0' => $row->mahs,
                '1' => $row->hohs,
                '2' => $row->tenhs,
                '3' => $row->phone,
                '4' => $row->gioitinh,
                '5' => $row->ngaysinh,
                '6' => $row->quequan,
                '7' => $row->hotencha,
                '8' => $row->nghenghiepcha,
                '9' => $row->hotenme,
                '10' => $row->nghengiepme,
                '11' => $row->class_id,
            );
        }

        return (collect($student));
    }

    public function headings(): array
    {
        return [
            'id',
            'Mã',
            'Họ',
            'Tên',
            'Phone',
            'Giới Tính',
            'Ngày Sinh',
            'Quê Quán',
            'Họ Tên Cha',
            'Nghề nghiệp',
            'Họ Tên Mẹ',
            'Nghề Nghiệp',
            'Lớp'
        ];
    }

    public function export(){
        return Excel::download(new ExportController(), 'danhsachhocsinh.xlsx');
   }
}
