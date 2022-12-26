@extends('layouts.main')
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        {{-- <p class="lead m-0">Biodata {{$transactions->name}}</p> --}}
        <a href="{{route('transactions.index')}}" class="btn btn-sm btn-dark">Kembali</a>
    </div>

        <div class="card-body">

          <table class="table">
            <thead>
              <tr>
                <th>Pemasukan</th>
                <th>:</th>
                @if(isset($transactions->debit))
                <th>{{$transactions->debit}}</th>
                @else
                <th>-</th>
                @endif
              </tr>
              <tr>
                <th>Detail Pemasukan</th>
                <th>:</th>
                @if(isset($transactions->nd))
                <th>{{$transactions->nd}}</th>
                @else
                <th>-</th>
                @endif
              </tr>
              <tr>
                <th>Pengeluaran</th>
                <th>:</th>
                @if(isset($transactions->kredit))
                <th>{{$transactions->kredit}}</th>
                @else
                <th>-</th>
                @endif
              </tr>
              <tr>
                <th>Keterangan Pengeluaran</th>
                <th>:</th>
                @if(isset($transactions->acara->name))
                <th>{{$transactions->acara->name}}</th>
                @else
                <th>-</th>
                @endif
                
              </tr>
              <tr>
               <th>Saldo</th>
               <th>:</th>
               <th>{{$transactions->saldo}}</th>
             </tr>
            </thead>
              

            {{-- <thead>
              <tr>
                <th>SN</th>
                <th>Nama</th>                        
                        <th>Tanggal Lahir</th>                        
                        <th>Alamat</th>                        
                        <th>Instagram</th>
                        <th>Lihat</th>                        
                        <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>

                @forelse ($transactions as $transactions)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <td>{{$transactions->name}}</td>
                        
                        <td>{{$transactions->tgl_lhr}}</td>
                        
                        <td>{{$transactions->address}}</td>
                        
                        <td>{{$transactions->ig}}</td>
                        
                    </tr>
                    
                @empty
                    <td>No record</td>
                @endforelse

            </tbody> --}}
          </table>

        </div>
    </div>
</div>

@endsection
