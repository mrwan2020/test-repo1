<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function showUserName(){
        return 'Marwan Zakaria';
    }

    public function getIndex(){
        return view('welcome');
    }


}
