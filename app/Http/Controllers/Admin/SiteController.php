<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        return view('site.Admin.index');
    }
}
