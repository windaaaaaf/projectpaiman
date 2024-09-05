<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class UserController extends Controller
{
    public function show(Request $request){
        $data['pesanan']=User::all();
        $data['total_pesanan']=$data['pesanan']->count();

        return view('pesanan',$data);
    }
    }




































