@extends('layouts.main')
@extends('layouts.app')
@section('title') {{'Keuangan'}} @endsection
@section('content')

<div class="container">
    <div class="card">

        <div class="card-header d-flex justify-content-between">
            <p class="lead m-0">Transaction List</p>
            <div class="mx-2 p-2"><a href="{{route('transactions.create')}}" class="btn btn-sm btn-dark">Tambah Pemasukan</a></div>
            <div class="ml-auto p-2"><a href="{{route('kredit')}}" class="btn btn-sm btn-dark">Tambah Pengeluaran</a></div>
        </div>

        <div class="card-body">

          <table class="table">

            <thead>
              <tr>
                <th>SN</th>
                <th>Debit</th>                                             
                <th>Kredit</th>                                              
                <th>Saldo</th>
                <th>Lihat</th>
                <th>Delete</th>
              </tr>
            </thead>

            <tbody>

                @forelse ($transactions as $transaction)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <td>Rp.{{$transaction->debit}}</td>
                        
                        {{-- <td>{{$transaction->nd}}</td> --}}
                        
                        <td>Rp.{{$transaction->kredit}}</td>
                        
                        {{-- <td>{{$transaction->nk}}</td> --}}
                        
                        <td>Rp.{{$transaction->saldo}}</td>

                        {{-- <td>
                          <a data-toggle="modal" id="mediumButton" data-target="#mediumModal" 
                          href="{{route('transactions.show', $transaction->id) }}" title="show">
                          <i class="fas fa-eye text-success  fa-lg"></i>
                        </a> --}}
                        <td>
                          <a href="{{route('transactions.show', $transaction->id) }}"><i class="far fa-eye" style="color:blue"></i></a>
                        </td>
                        <td>
                         <form action="{{route('transactions.destroy', $transaction->id ) }}" method="POST">
                            @csrf
                             @method('DELETE')
                             <button style="border: none; background-color:transparent;"
                                   onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Transaksi ini?');"
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
