<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function checkout()
    {

        return view('checkout', );
    }
    public function cart(Request $request)
    {
        // Logika untuk cart

        $user = auth()->user(); // Mengambil data pengguna yang sedang login
        $data['produk'] = product::find($request->id);
        return view('cart', compact('user',$data));

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function show(Request $request)
    {
        $user = auth()->user(); // Mengambil data pengguna yang sedang login
        $data['produk'] = product::find($request->id);
        return view('user-show', compact('user'),$data);
    }
    public function cekout(Request $request)
    {
        $user = auth()->user();
        $data['produk'] = product::find($request->id);
        return view('cekout', compact('user'),$data);
    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validate)) {
            return redirect('/user');
        }
        return redirect()->back()->with('pesanlogin','maaf,login anda gagal!');

    }
    public function user(Request $request){
        $data['user'] = User::all();
        $data['produk'] = product::all();
        $data['total_user'] = $data['user']->count();

        return view('user', $data);
    }
    function add(){

    }
}






































