<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
class TestController extends Controller
{
    //
    public function Tester(){
        $TestMode= new Test;
        $message=$TestMode->TestMsg();
        return view('test', ['msg'=>$message]);
    }
}
