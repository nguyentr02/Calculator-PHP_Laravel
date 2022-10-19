<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function display() {
        return view('verify');
    }

    public function check(Request $request)
    {
        $input = $request->input('number');

        if ($input == '') {
            return 'Need number';
        } elseif (!is_numeric($input)) {
            return 'This is not a num, try again';
        } elseif ((int) $input <= 10){
            return 'Num < 10';
        } else {
            return 'Correct';
        }
    }
}
