<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'USERS';
    }
    public function user(){
        return view('pages.user');
    }
}
