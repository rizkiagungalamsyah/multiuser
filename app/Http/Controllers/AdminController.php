<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function kasir()
    {
        return view('admin');
    }
    public function pengguna()
    {
        return view('admin');
    }
}
