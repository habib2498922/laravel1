<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function test() {
        //return "hello Hai";
        return view('view');
    }
    public function home() {
        $allStudents = Student::all();
        return view('frontEnd.home', ['allStudents'=>$allStudents]);
    }
    public function about() {
        return view('frontEnd.about');
    }
    public function helloWorld() {
        return view('frontEnd.contact');
    }
    public function saveStudent(Request $request) {
        //return $request->all();
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->save();
        return 'success';
    }
    public function editStudent($id) {
        $studentById = Student::find($id);
        return view('frontEnd.edit-student', ['studentById'=>$studentById]);
    }
    public function updateStudent(Request $request) {
        $student = Student::find($request->a);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->save();
        return redirect('/');
    }
    public function deleteStudent($id) {
        $studentById = Student::find($id);
        $studentById->delete();
        return redirect('/');
    }
	
	public function helloWorld() {
		echo "Hello WOrld";
	}

}
