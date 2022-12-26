@extends('layouts.main')
@extends('layouts.app')
@section('title') {{'Profil'}} @endsection
@section('content')
<div class="container" style="padding: 30px 0">
    <div class="row justify-content-center">
        <div class="panel panel-default">
            <div class="panel-heading">
                Profile {{ $user->name }}
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                    @if($user->profile->avatar)
                        <img src="{{ Storage::url($user->profile->avatar) }}" width="100%" />
                    @else
                        <img src="{{ asset('img/profile/default.png') }}" width="100%" />
                     @endif
                </div>
                <div class="col-md-8">
                    <p><b>Nama:</b>{{ $user->name }} </p>
                    <p><b>Email:</b>{{ $user->email }} </p>
                    <p><b>Tempat&Tanggal Lahir:</b>{{ $user->profile->tmpt_lhr }} {{ $user->profile->tgl_lhr }} </p>
                    <p><b>Alamat:</b> {{ $user->profile->address }}</p>
                    <p><b>Instagram:</b>{{ $user->profile->instagram }} </p>
                    <p><b>WhatApp:</b>{{ $user->profile->whatsapp }} </p>
                    <p><a href="{{route('admin.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a></p>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection