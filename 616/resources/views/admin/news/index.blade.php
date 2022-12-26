@extends('layouts.main')
@extends('layouts.app')
@section('title') {{'Berita'}} @endsection
@section('content')

<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between">
            <p class="lead m-0">Daftar Berita</p>
            <div class="ml-auto p-2"><a href="{{route('news.create')}}" class="btn btn-sm btn-dark">Buat Berita</a></div>
        </div>

        <div class="card-body">

          <table class="table">

            <thead>
              <tr>
                <th>SN</th>
                <th>Nama Berita</th>                                            
                        <th>Gambar Terkait</th>
                        <th>Lihat</th>                        
                        <th>Edit</th>
                        <th>Delete</th>
                <th></th>
              </tr>
            </thead>

            <tbody>

                @forelse ($news as $news)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <td>{{$news->name}}</td>
                        
                        <td><img src="{{ Storage::url($news->image) }}" height="75" width="75" alt="" /></td>

                        <td>
                          <a href="{{route('news.show', $news->id) }}"><i class="far fa-eye" style="color:blue" ></i></a>
                      </td>
                        
                        <td>
                          <a href="{{route('news.edit', $news->id) }}"><i class="fas fa-edit" style="color:grey" ></i></a>
                      </td>

                      <td>
                          <form action="{{route('news.destroy', $news->id ) }}" method="POST">
                             @csrf
                              @method('DELETE')
                              <button style="border: none; background-color:transparent;"
                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                    type="submit" title="Delete">
                                    <i class="fas fa-trash" style="color:red" ></i>
                            </button>
                          </form>
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
