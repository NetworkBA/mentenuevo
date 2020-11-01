<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    
    public function testRequest(Request $r){
        dd($r);
    }
}
