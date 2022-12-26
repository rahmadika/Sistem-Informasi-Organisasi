@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Tambah Pemasukan</h2></div>
        <div class="card-body">

            <form action="{{route('transactions.store')}}" method= "POST" enctype="multipart/form-data">
                @csrf
                        <div class="form-group">
                        <label for="debit">Pemasukan</label>
                        <input type="number" class="form-control" name="debit" id="debit" value="{{old('debit')}}">
                        </div>

                        <div class="form-group">
                        <label for="nd">Keterangan Pemasukan</label>
                        <input type="text" class="form-control" name="nd" id="nd" value="{{old('nd')}}">
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
