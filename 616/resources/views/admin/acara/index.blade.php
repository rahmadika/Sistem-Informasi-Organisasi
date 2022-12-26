@extends('layouts.main')
@extends('layouts.app')
@section('title') {{'Acara'}} @endsection
@section('content')

<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between">
            <p class="lead m-0">Acara List</p>
            <div class="ml-auto p-2"><a href="{{route('acaras.create')}}" class="btn btn-sm btn-dark">Create</a></div>
        </div>

        <div class="card-body">

          <table class="table">

            <thead>
              <tr>
                <th>SN</th>
                <th>Nama Acara</th>                                              
                <th>Tanggal Acara</th>                        
                <th>Tempat Acara</th>                    
                <th>Lihat</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>

                @forelse ($acaras as $acara)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <td>{{$acara->name}}</td>
                        
                        <td>{{$acara->date}}</td>
                        
                        <td>{{Str::limit($acara->place, 10)}}</td>
                        
                        <td>
                          <a href="{{route('acaras.show', $acara->id) }}"><i class="far fa-eye" style="color:blue"></i></a>
                        </td>
                        <td>
                          <a href="{{route('acaras.edit', $acara->id) }}"><i class="fas fa-edit" style="color:grey"></i></a>
                        </td>
                        <td>
                          <form action="{{route('acaras.destroy', $acara->id ) }}" method="POST">
                             @csrf
                              @method('DELETE')
                              <button style="border: none; background-color:transparent"
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
          {{-- <div class="d-flex justify-content-center">
            {!! $events->links() !!}
        </div> --}}

        </div>
    </div>
</div>

@endsection
