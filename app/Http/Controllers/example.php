<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class example extends Controller
{
    public function homepage() {
        return view('homepage');
    }
};
