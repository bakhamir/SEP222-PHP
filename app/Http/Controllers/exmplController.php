<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exmplController extends Controller
{
    public function test(){
        dd($request->mail())
        $t = 1/0;
        return response()->json(['hello' => 'laravel'],201)
    }
}
