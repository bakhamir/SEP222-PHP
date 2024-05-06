<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    public function index(){
    $students = student::paginate(5);
        return response()->json($students,200);
    }
    public function create(Request $request){

        $student = student::create($request->all());
        return response()->json($student,201);
    }
    public function read(int $id)
    {
        $student = student::find($id);
        return response()->json($student,200);
    }
    public function update(Request $request,int $id)
    {
        $student = student::find($id);
        $student->update($request->all());
        return response()->json($student,201);
    }
    public function delete(int $id){    
     $student = student::find($id);
     $student->delete();
     return response()->json($student,201);

    }
    // public function upd(Request $request ){
    //     $student = students::update(request->all(),)
    // }
}
