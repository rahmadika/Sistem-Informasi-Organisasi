@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Buat Berita</h2></div>
        <div class="card-body">
            @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

            <form action="{{route('news.store')}}" method= "POST" enctype="multipart/form-data">
                @csrf
                                            <div class="form-group">
                        <label for="name">Nama Berita</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                        <label for="description">Isi</label>
                        <textarea class="form-control" name="description" id="description" rows="5" cols="5">{{old('description')}}</textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                        <label for="image">Gambar Terkait</label>
                        <input type="file" class="form-control" name="image" id="image" alt="image">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>


                    <button class="btn btn-dark" type="submit">Create</button>
            </form>

        </div>
    </div>

@endsection
