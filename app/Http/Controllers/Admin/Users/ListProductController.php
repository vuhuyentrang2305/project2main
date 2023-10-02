<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListProductController extends Controller
{ public function index(){
    return view('list-product', [
        'title' => 'Danh sách sản phẩm'
    ]);
}
    //
}
