<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $loginPath = '/';
    protected function validator(array $data){
        return Validator::make($data,[
           'name' => 'required|max:255',

        ]);
    }
}
