<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use App\Models\Contact;

class AuthController extends Controller
{

    public function register(AuthRequest $request)
    {
        $register=$request->all();
        User::create($register);

        return redirect('login');
    }

    public function admin()
    {
        return view('admin');
    }




    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $confirm=$request->all();
        Contact::create($confirm);

        return view('confirm');

    }

    public function thanks()
    {
        return view('thanks');
    }




}
