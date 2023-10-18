<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use PhpParser\Node\Stmt\TryCatch;

class usercontroller extends Controller
{
    function __construct()
    {
    }
    function index()
    {
        $users = User::paginate(2);
        return view('users', ['users' => $users]);
    }

    function StoreImage($request)
    {
        $imagepath = $request->file('image')->store('uploads', 'public');
        return $imagepath;
    }
    function create(RegisterRequest $request)
    {

        $image = $this->StoreImage($request);
        $data = $request->except('_token');
        $data['image'] = $image;
        if (!array_key_exists('role', $data)) {
            $data['role'] = 'user';
        }
        $user = User::create($data);
        if(!Auth::check()){

            Auth::login($user);
            return redirect()->route('home');
        }else{
            return redirect()->route('createuser')->with('suc','User Created');
        }
    }
    function remove()
    {
        return view('dashboard.actions.deleteuser');
    }
    function destroy(Request $request)
    {
        $request->validate(['id' => 'required|exists:users,id'], ['id.exists' => 'There is no user with that id']); // custom the laravel error message
        $id = request('id');
        User::find($id)->delete();
        return redirect(route('removeuser'))->with('suc', 'User Deleted');
    }
    function viewlogin()
    {

        return view('front.login');
    }
    function register()
    {
        return view('front.register');
    }
    function edit(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:doctors,id',
            'name' => 'required|min:2|max:20|string',
            'email' => [
                'required',
                'email',
                Rule::unique('doctors', 'email')->ignore($request->id, 'id'),
            ],
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15'
        ], ['id.exists' => 'There is no user with that id']);
        $image = $this->StoreImage($request);
        $data = $request->except('_token', '_method');
        $data['image'] = $image;
        User::where('id', $request->id)->update($data);
        return redirect(route('updateuser'))->with('suc', 'User Data Updated');
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'email|required|exists:users,email',
            'password' => 'required'
        ], ['email.exists' => 'There is no account linked to that email']);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}
