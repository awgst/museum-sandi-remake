<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    // Control Admin Pages
    // Index Admin
    public function index(){
        return view('admin.index');
    }
}
