<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Controllers\fu;

class MainController extends Controller
{
    public function index(){
        return view('main', [
            'title' => 'Phe La'
        ]);
    }
}
