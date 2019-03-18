<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Menu\Menu;

class IndexController extends Controller
{
    public function __construct() {
    }

    //
    public function index() {
        return view('index.index');

    }
}
