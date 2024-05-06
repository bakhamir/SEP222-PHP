<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
class schoolController extends Controller
{
    public function create(Request $request){
        $school = school::create($request->all());
        return response()->json($school,201);
    }
    public function item($id){
        $school = school::with('students')->findOrFail($id);
        return response()->json($school,200);
    }
    // public function list(Request $request){
    //     $schools = school::where('id','>',2);
    //     return $schools;
    // }
    // public function del($id){ 
    //     $school = school::where('id', {$id})->delete(); 
    //     return response()->json($school,204);
    // }
    // public function upd(Request $request){
    //     $school = school::
    // }
}
