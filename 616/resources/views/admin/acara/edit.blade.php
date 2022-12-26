@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Edit Acara</h2></div>
        <div class="card-body">

            <form action="{{route('acaras.update', $acara->id)}}" method= "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                                            <div class="form-group">
                        <label for="name">Nama Acara</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$acara->name}}">
                        </div>

                        <div class="form-group">
                        <label for="description">Deskripsi Acara</label>
                        <textarea class="form-control" name="description" id="description" rows="5" cols="5">{{$acara->description}}</textarea>
                        </div>

                        <div class="form-group">
                        <label for="date">Tanggal Acara</label>
                        <input type="date" class="form-control" name="date" id="date" value="{{$acara->date}}">
                        </div>

                        <div class="form-group">
                        <label for="place">Tempat Acara</label>
                        <textarea class="form-control" name="place" id="place" rows="5" cols="5">{{$acara->place}}</textarea>
                        </div>


                    <button class="btn btn-dark" type="submit">Create</button>
            </form>
        </div>
    </div>

@endsection
