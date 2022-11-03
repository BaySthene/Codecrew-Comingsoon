<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mailSubscribe(Request $request)
    {

        if(DB::table('mailsubscribe')->where('ms_email', $request->input('email'))->doesntExist())
        {
            $isInsert = DB::table('mailsubscribe')->insert([
                'ms_email' => $request->input('email'),
            ]);

        }


        return response()->json([
            'status' => $request->input('email'),
           
        ],200);
    }
}
