@extends('layouts.main')
@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header"><h2 class="lead text-center">Edit Transaction</h2></div>
        <div class="card-body">

            <form action="{{route('transactions.update', $transaction->id)}}" method= "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                                            <div class="form-group">
                        <label for="debit">Pemasukan</label>
                        <input type="number" class="form-control" name="debit" id="debit" value="{{$transaction->debit}}">
                        </div>

                        <div class="form-group">
                        <label for="nd">Keterangan Pemasukan</label>
                        <input type="text" class="form-control" name="nd" id="nd" value="{{$transaction->nd}}">
                        </div>

                        <div class="form-group">
                        <label for="kredit">Pengeluaran</label>
                        <input type="number" class="form-control" name="kredit" id="kredit" value="{{$transaction->kredit}}">
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
                        {{-- <div class="form-group">
                        <label for="nk">Keterangan Pengeluaran</label>
                        <input type="text" class="form-control" name="nk" id="nk" value="{{$transaction->nk}}">
                        </div> --}}

                        <div class="form-group">
                        <label for="saldo">Saldo</label>
                        <input type="number" class="form-control" name="saldo" id="saldo" value="{{$transaction->saldo}}">
                        </div>


                    <button class="btn btn-dark" type="submit">Create</button>
            </form>
        </div>
    </div>

@endsection
