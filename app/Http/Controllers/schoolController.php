<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\school;
class schoolController extends Controller
{
    public function create(Request $request){
        // $school = new school();
        // $school->name='Номер 133';
        // $school->adress='Номер 133'; 
        // $school->save();
        
        $request->validate
        $school = school::create($request->all());
        // dd($school);

        return response()->json($school,201);
    }
    public function item($id){
        $school = school::findOrFail($id);
        
        return response()->json($school,200);
    }
    public function list(Request $request){
        $schools = school::where('id','>',2);
        return $schools;
    }
    public function del($id){ 
        $school = school::where('id', {$id})->delete(); 
        return response()->json($school,204);
    }
    // public function upd(Request $request){
    //     $school = school::
    // }
}
