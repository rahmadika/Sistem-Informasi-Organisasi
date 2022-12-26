<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name','ASC')->get();
        return view('admin.registration.index', compact('users'));
        // return view('admin.registration.index', [
        //     'users' => $users
        // ]);
        // return view('admin.registration.index',['users' => User::orderBy('name','ASC')->get()]);
        
    }
    public function create()
    {
        return view('admin.registration.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
            'name' => 'required',
            'level' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ],
        [
            'name.required'=> 'Nama Jangan Kosong Dong',
            'email.required'=> 'Isi Emailnya Buat Nanti Login',
            'password.required'=>'Password Tidak Boleh Kosong',

        ]);

        $input = $request->all();
        $input['password']= bcrypt($input['password']);
        $user = User::create($input);

        return redirect()->route('register.index')->with('message', 'user Created Successfully!');
        
        // auth()->login($user);
        
        // return redirect()->to('/games');
    }
    public function show(User $user)
    {
        $man = User::find($user);
        return $man;
        // return view('admin.anggota.show', compact('user','man'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('register.index')
            ->with('success', 'User deleted successfully');

    }
}
