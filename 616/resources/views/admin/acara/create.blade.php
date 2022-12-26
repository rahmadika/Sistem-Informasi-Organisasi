
@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Buat Acara Baru</h2></div>
        <div class="card-body">
            @if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
            </div>
            @endif

            <form action="{{route('acaras.store')}}" method= "POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="name">Nama Acara</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        </div>

                        <div class="form-group">
                        <label for="description">Deskripsi Acara</label>
                        <textarea class="form-control" name="description" id="description" rows="5" cols="5">{{old('description')}}</textarea>
                        @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif    
                        </div>

                        <div class="form-group">
                        <label for="date">Tanggal Acara</label>
                        <input type="date" class="form-control" name="date" id="date" value="{{old('date')}}">
                        @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                        </div>

                        <div class="form-group">
                        <label for="place">Tempat</label>
                        <textarea class="form-control" name="place" id="place" rows="5" cols="5">{{old('place')}}</textarea>
                        @if ($errors->has('place'))
                        <span class="text-danger">{{ $errors->first('place') }}</span>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="pj">Penanggung Jawab</label>
                            <select class="form-control" id="pj" name="pj">
                            @foreach ($pj as $pjs)
                            <option value="{{ $pjs->id }}">{{ $pjs->name }}</option>
                            @endforeach
                            </select>
                        </div>


                    <button class="btn btn-dark" type="submit">Create</button>
            </form>

        </div>
    </div>

@endsection
