<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function get_all_student(){
        $datas = Student::all();
        return view('student_manage',[
            'students' => $datas,
        ]);
    }

    public function get_student_by_id($id){
        $data = DB::select('SELECT * FROM students WHERE id = :id',['id' => $id]);
        return view('edit',['data' => $data]);
    }
    public function create(){
        return view('add');
    }
    public function store(Request $request){
        Student::create([
            'fullname' => $request->fullname,
            'birthday' => $request->bd,
            'address' => $request->address,
        ]);
        return redirect('student_manage');
    }

    public function edit(Request $request, $id){
        $data = Student::find($id);
        $data->update([
            'fullname' => $request->fullname,
            'birthday' => $request->bd,
            'address' => $request->address,
        ]);
        return redirect('student_manage');
    }

    public function delete($id){
        $delete = Student::find($id);
        $delete->delete();

        return redirect('student_manage');
    }
}
