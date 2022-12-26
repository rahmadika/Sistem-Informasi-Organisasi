@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Edit Anggota</h2></div>
        <div class="card-body">

            <form action="{{route('anggotas.update', $anggota->id)}}" method= "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto" alt="foto">
                    @error('foto')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>        
                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$anggota->name}}">
                        </div>

                        <div class="form-group">
                        <label for="tgl_lhr">Tgl_lhr</label>
                        <input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" value="{{$anggota->tgl_lhr}}">
                        </div>

                        <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="5" cols="5">{{$anggota->address}}</textarea>
                        </div>

                        <div class="form-group">
                        <label for="ig">Ig</label>
                        <input type="text" class="form-control" name="ig" id="ig" value="{{$anggota->ig}}">
                        </div>


                    <button class="btn btn-dark" type="submit">Create</button>
            </form>
        </div>
    </div>

@endsection
