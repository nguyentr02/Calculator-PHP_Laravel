<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function xinchao(){
        return view('sum');
    }

    public function chuyen(){
        echo 'lam xong roi ve';
    }

}
