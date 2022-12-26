@extends('layouts.navbar')
@section('content')
<div class="container" id="profile">
    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Edit Profile</h2></div>
        <div class="card-body">
    
            <form action="{{route('profile.update', $profile->id)}}" method= "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                <label for="avatar">Foto Profile</label>
                <input type="file" class="form-control" name="avatar" id="avatar" alt="avatar">
                @error('avatar')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
    
                <div class="form-group">
                <label for="tmpt_lhr">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmpt_lhr" id="tmpt_lhr" value="{{$profile->tmpt_lhr}}">
                </div>        
                <div class="form-group">
                <label for="tgl_lhr">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" value="{{$profile->tgl_lhr}}">
                </div>

                <div class="form-group">
                <label for="address">Alamat</label>
                <textarea class="form-control" name="address" id="address" rows="5" cols="5">{{$profile->address}}</textarea>
                </div>

                <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-control" name="instagram" id="instagram" value="{{$profile->instagram}}">
                </div>

                <div class="form-group">
                    <label for="whatsapp">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{$profile->whatsapp}}">
                </div>


                <button class="btn btn-dark" type="submit">Create</button>
            </form>
        </div>
    </div>
    {{-- <div class="section-title" data-aos="fade-up">
        <h2>Profile {{ $user->name }}</h2>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            @if($user->profile->avatar)
                <img src="{{ asset('img/profile') }}/{{ $user->profile->avatar }}" width="100%" />
            @else
                <img src="{{ asset('img/profile/default.png') }}" width="100%" />
            @endif
        </div>
        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <p><b>Nama:</b>{{ $user->name }} </p>
            <p><b>Email:</b>{{ $user->email }} </p>
            <p><b>Tempat&Tanggal Lahir:</b>{{ $user->profile->tmpt_lhr }} {{ $user->profile->tgl_lhr }} </p>
            <p><b>Alamat:</b> {{ $user->profile->address }}</p>
            <p><b>Instagram:</b>{{ $user->profile->instagram }} </p>
            <p><b>WhatApp:</b>{{ $user->profile->whatsapp }} </p>    
        </div>
    </div> --}}
</div>
@endsection