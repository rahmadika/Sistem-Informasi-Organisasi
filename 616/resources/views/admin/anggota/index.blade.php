@extends('layouts.main')
@extends('layouts.app')
@section('title') {{'Anggota'}} @endsection
@section('content')

<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between">
            <p class="lead m-0">Anggota List</p>
            <div class="ml-auto p-2"><a href="{{route('anggotas.create')}}" class="btn btn-sm btn-dark">Create</a></div>
        </div>

        <div class="card-body">

          <table class="table">

            <thead>
              <tr>
                <th>Nama</th>                        
                        {{-- <th>Tanggal Lahir</th>                        
                        <th>Alamat</th>                        
                        <th>Instagram</th> --}}
                        <th>Lihat</th>                        
                        <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>

                @forelse ($anggotas as $anggota)
                    <tr>

                      <td>{{$anggota->name}}</td>
                        
                        {{-- <td>{{$anggota->tgl_lhr}}</td>
                        
                        <td>{{$anggota->address}}</td>
                        
                        <td>{{$anggota->ig}}</td> --}}
                        
                        <td>
                          <a href="{{route('anggotas.show', $anggota->id) }}"><i class="far fa-eye" style="color:blue"></i></a>
                      </td>

                      <td>
                        <a href="{{route('anggotas.edit', $anggota->id) }}"><i class="fas fa-edit" style="color:grey"></i></a>
                    </td>

                      <td>
                          <form action="{{route('anggotas.destroy', $anggota->id ) }}" method="POST">
                             @csrf
                              @method('DELETE')
                              <button style="border: none; background-color:transparent;"
                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                    type="submit" title="Delete">
                                    <i class="fas fa-trash" style="color:red"></i>
                            </button>
                          </form>
                      </td>
                    </tr>
                    
                @empty
                    <td>No record</td>
                @endforelse

            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $anggotas->links() !!}
        </div>
        </div>
    </div>
</div>

@endsection
