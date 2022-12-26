<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('profile',['user'=>$user]);
    }

    public function userprofile()
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('user.profile.userprofile',['user'=>$user]);
    }

    public function edit(Profile $profile)
    {
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('user.profile.edituser', ['user' => $user], compact('profile'));
    }

    public function update(ProfileRequest $request, Profile $profile)
    {
        $profile->update($request->validated());
        $profile = Profile::find(Auth::user()->id);
        if($request->hasFile('avatar')){
            $request->validate([
              'tmpt_lhr' => 'required',
            //   'avatar' => 'required|avatar|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('avatar')->store('public/img/profile');
            $profile->avatar = $path;
        }
        $profile->tmpt_lhr = $request->tmpt_lhr;
        $profile->tgl_lhr = $request->tgl_lhr;
        $profile->address = $request->address;
        $profile->instagram = $request->instagram;
        $profile->whatsapp = $request->whatsapp;
        $profile->save();

        
        return redirect()->route('user.profile')->with('message', 'Anggota Created Successfully!');
    }

}

