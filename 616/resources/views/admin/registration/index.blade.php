@extends('layouts.main')
@extends('layouts.app')
@section('title') {{'User Management'}} @endsection
@section('content')

<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between">
            <p class="lead m-0">Daftar User</p>
            <div class="ml-auto p-2"><a href="{{route('register.create')}}" class="btn btn-sm btn-dark">Buat Akun</a></div>
        </div>

        <div class="card-body">

          <table class="table">

            <thead>
              <tr>
                <th>SN</th>
                <th>Nama</th>
                <th>Email</th>                         
                <th>Level</th>                                               
                <th>Lihat</th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>

                @forelse ($users as $user)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <td>{{$user->name}}</td>
                        
                        <td>{{$user->email}}</td>
                        
                        <td>{{$user->level}}</td>

                      <td>
                          <a href="{{route('register.show', $user->id) }}"><i class="far fa-eye" style="color:blue" ></i></a>
                      </td>
                      <td>
                          <form action="{{route('register.destroy', $user->id ) }}" method="POST">
                            @csrf
                              @method('DELETE')
                              <button style="border: none; background-color:transparent;"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus User ini?');"
                                    type="submit" title="Delete">
                                    <i class="fas fa-trash" style="color:red" ></i>
                            </button>
                      </td>
                    </tr>
                    
                @empty
                    <td>No record</td>
                @endforelse

            </tbody>
          </table>

        </div>
    </div>
</div>

@endsection
