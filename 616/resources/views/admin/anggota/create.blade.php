@extends('layouts.main')
@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Buat Anggota Baru</h2></div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif

            <form action="{{route('anggotas.store')}}" method= "POST" enctype="multipart/form-data">
                @csrf
                        <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" name="foto" id="foto" alt="foto">
                        @error('foto')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                         @endif
                        </div>

                        <div class="form-group">
                        <label for="tgl_lhr">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" value="{{old('tgl_lhr')}}">
                        @if ($errors->has('tgl_lhr'))
                        <span class="text-danger">{{ $errors->first('tgl_lhr') }}</span>
                        @endif
                        </div>

                        <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea class="form-control" name="address" id="address" rows="5" cols="5">{{old('address')}}</textarea>
                        @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                        </div>

                        <div class="form-group">
                        <label for="ig">Instagram</label>
                        <input type="text" class="form-control" name="ig" id="ig" value="{{old('ig')}}">
                        @if ($errors->has('ig'))
                        <span class="text-danger">{{ $errors->first('ig') }}</span>
                         @endif
                        </div>


                    <button class="btn btn-dark" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
