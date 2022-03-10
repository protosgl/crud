<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function show(Request $request){
        //$validation = $request->validate();
        $user = new User();
        $user = DB::table('users')->select('name')->get();
        return view('welcome', ['user' => $user]);

    }

    public function allUserOrm(){
        $user = new User();
        $users = $user::where();
        return view('userController', ['user' => $users]);

    }

    /*public function postUser(Request $request)  {
        return view('postUser',['user' => $request]);
    }*/

    /*public function postUser()  {
        return view('postUser',['user' => ]);
    }*/

}
