<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Models\User;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('registration');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4','confirmed' ],
            'confirmPassword' => ['required', 'string', 'min:4'],
        ], [
            'password.confirmed' => 'The password confirmation does not match.',
        ]);
    }
    


    public function register(Request $request)
{
    // $validator = $this->validator($request->all());

    // if ($validator->fails()) {
    //     return redirect()->back()->withInput()->withErrors($validator);
    // }

    // Hash the password
    $hashedPassword = Hash::make($request->password);
    // Your registration logic goes here

    // You can use $request to access form data

    // Example: Create a new user
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' =>$request->password,
        'confirmPassword' =>$request->confirmPassword
    ]);

    // Redirect the user after registration
    return redirect('/home'); // You can customize the redirection URL
}

}
