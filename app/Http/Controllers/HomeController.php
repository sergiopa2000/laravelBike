<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $data = ['activeHome' => 'active'];
        return view('index', $data);
    }
}
