@extends('layouts.navbar')
@section('content')
<section id="profile" class="contact">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Profile {{ $user->name }}</h2>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                @if($user->profile->avatar)
                    <img class="profile-avatar" src="{{ Storage::url($user->profile->avatar) }}" width="100%" />
                @else
                    <img class="profile-avatar" src="{{ asset('img/profile/default.png') }}" width="100%" />
                @endif
            </div>
            <div class="col-lg-7 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <p><b>Nama:</b>{{ $user->name }} </p>
                <p><b>Email:</b>{{ $user->email }} </p>
                <p><b>Tempat&Tanggal Lahir:</b>{{ $user->profile->tmpt_lhr }} , {{ $user->profile->tgl_lhr }} </p>
                <p><b>Alamat:</b> {{ $user->profile->address }}</p>
                <p><b>Instagram:</b>{{ $user->profile->instagram }} </p>
                <p><b>WhatApp:</b>{{ $user->profile->whatsapp }} </p>
                <p><a href="{{route('profile.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a></p>
            </div>
        </div>
    </div>
</section>
@endsection