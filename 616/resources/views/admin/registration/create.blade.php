@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <h2>Registrasi User</h2>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
    <form method="POST" action="{{route('register.store')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" class="form-control" id="name" name="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>


        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" id="password" name="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="level">Daftar Sebagai :</label>
            <select id="level" name="level">
                <option value="admin">Admin</option>
                <option value="user">user</option>
            </select>
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection 
 
 
