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

        // $obj = new \stdClass();

        // $obj -> name = 'marwan zakaria';
        // $obj -> id = 5;
        // $obj -> gender = 'male';
        // $obj -> age = 25;
        // return view('welcome',compact('obj'));
        // return view('welcome')->with('name','marwan zakaria');

        // $data=['a'=> 'marwan', 'b'=>'zakaria'];
        // return view('welcome', compact('data'));

        $data=[];
        return view('welcome', compact('data'));

        }
    

}
