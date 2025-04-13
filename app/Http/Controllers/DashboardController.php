<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.Notudo'); // Ini akan menampilkan Notudo.blade.php
    }
}
