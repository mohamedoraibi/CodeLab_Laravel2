<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //
    public function getAll()
    {
        $students = student::all();
//        dd($students->first()->level->students);
//        $students = student::onlyTrashed()->get();
//        dd($students->pluck('grade')->average());
//        dd($students);
        return view('students.all', compact('students'));
        //  return $students;
        // return view('all', compact('students'));
    }

    public function restoreStudent($id)
    {
        $student = Student::onlyTrashed()->find($id);
        $student->restore();
    }

    public function insertStudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required ',
            'last_name' => 'required ',
            'grade' => 'required ',
        ]);
        if ($validator->fails())
            return redirect()->back()->WithErrors($validator->errors()->all())->withInput();
        else {

            $student = new student;
            $student->first_name = $request->first_name;
            $student->last_name = $request->last_name;
            $student->grade = $request->grade;
            $student->level_id = $request->level;
            $student->save();
            return $student;
        }
    }

    public function addStudent()
    {
        $student = new student;
        $student->first_name = "Mohamed";
        $student->last_name = "ahmed";
        $student->grade = "25";
        $student->save();
        return $student;
    }
//
//    public function deleteStudent($id)
//    {
//        $student = Student::find($id);
//        $student->delete();
//        return "Deleted";
//    }
    public function deleteStudent(student $student)
    {
        $student->delete();
        return "Deleted";
    }

    public function updateStudent(student $student)
    {
        $student->first_name = "sami";
        $student->save();
        return "saved";
    }
}
