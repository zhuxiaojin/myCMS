<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Appstract\Options\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    //
    public function index(Request $request) {
        $keywords = $request->get('keywords','');
        $options = Option::latest()->paginate();
        return view('option.index', compact('options', 'keywords'));

    }
}
