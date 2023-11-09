<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'vmNo' => 'required|string|max:255|unique:users,vmNo',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function create()
    {
        return view('User.sign-up');
    }

    public function store(Request $data)
    {
        // dd($data);
        $this->validator($data->all())->validate();

        User::create([
            'vmNo' => $data['vmNo'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('home')->with('success', 'User created successfully.');
    }

    public function sign_up()
    {
        return view('User.sign-up');
    }

    public function get_login()
    {
        return view('User.login');
    }

    public function login(Request $data)
    {
        dd($data);
        $this->validator($data->all())->validate();

        User::create([
            'vmNo' => $data['vmNo'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('home')->with('success', 'Login successfull.');
    }
    
}
