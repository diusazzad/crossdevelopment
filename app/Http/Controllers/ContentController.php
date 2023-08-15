<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function home()
    {
        return view('welcome');
    }
}
