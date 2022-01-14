<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestControllers extends Controller
{
    //
    public function showComponent1(){
        $message = 'メッセージ';
        return view('tests.component-test1',
        compact('message'));
    }
    public function showComponent2(){
        return view('tests.component-test2');
    }
}
