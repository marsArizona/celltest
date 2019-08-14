<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }



    public function hello_get(){

        return response()->json([

            'message' => 'hello world via GET'
        ]);
    }


    public function hello_post(Request $req){

        return response()->json([

            'message' => 'hello via POST',
            'content' => $req->all()

        ]);
    }

    public function alta_usuario(Request $req){

            User::create([
                'name'      => $req->input('name'),
                'password'  => $req->input('password')
            ]);

            return response()->json([
                'message' => 'el usuario se dio de alta con exito'

                ]);
    }
}
