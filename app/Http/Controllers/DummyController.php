<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    function any(){
        return 'any';
    }
    
    function delete(){
        return 'delete';
    }
    
    function get(){
        return view('dummy.get');
    }
    
    function post(){
        return 'post';
    }
    
    function put(){
        return 'put';
    }
}
