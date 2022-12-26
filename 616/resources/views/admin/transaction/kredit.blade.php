@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Tambah Pengeluaran</h2></div>
        <div class="card-body">

            <form action="{{route('transactions.store')}}" method= "POST" enctype="multipart/form-data">
                @csrf
                        <div class="form-group">
                        <label for="kredit">Pengeluaran</label>
                        <input type="number" class="form-control" name="kredit" id="kredit" value="{{old('kredit')}}">
                        </div>

                        <div class="form-group">
                        <label for="nk">Keterangan Pengeluaran</label>
                        <select class="form-control" id="nk" name="nk">
                        @foreach ($keterangan as $ket)
                        <option value="{{ $ket->id }}">{{ $ket->name }}</option>
                        @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" name="nk" id="nk" value="{{old('nk')}}"> --}}
                        </div>
                        
                        <div class="form-group">
                            <label for="saldo">Saldo Terakhir</label>
                            <input type="number" class="form-control" name="saldo" id="saldo" value="{{$latest->saldo}}" readonly>
                        </div>

                    <button class="btn btn-dark" type="submit">Create</button>
            </form>

        </div>
    </div>

@endsection
