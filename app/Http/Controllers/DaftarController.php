<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index(Request $request){
       $name =  $request->input('name');
       $email =  $request->input('email');
        $password = $request->input('password');

       User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
       ]);

       
        return view('pages/dashboard/dashboard');
    }
}
