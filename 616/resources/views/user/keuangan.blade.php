@extends('layouts.navbar')
@section('content')
<section id="hero" class="d-flex justify-content-center">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Keuangan</h2>
        </div>

        <div class="row">
            <div class="panel-body table-responsive">
                <table class="display" width="100%" data-aos="fade-up">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pemasukan</th>                                             
                            <th>Pengeluaran</th>
                            {{-- <th>Keterangan Pengeluaran</th>                                               --}}
                            <th>Saldo</th>
                            {{-- <th>Aksi</th> --}}
                                        
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($transactions as $transaction)
                        <tr>
                        <td>{{$loop->iteration}}</td>

                        <td>Rp.{{$transaction->debit}}</td>
                            
                            {{-- <td>{{$transaction->nd}}</td> --}}
                            
                            <td>Rp.{{$transaction->kredit}}</td>
                            
                            {{-- <td>{{$transaction->acara->name}}</td> --}}
                            
                            <td>Rp.{{$transaction->saldo}}</td>
                            <td>
                                <a href="{{route('transaction.show', $transaction->id) }}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>
                                
                        @empty
                            <td>No record</td>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $transactions->links() !!}
                    </div>
            </div>
        </div>
    </div>
  </section><!-- End Contact Section -->
@endsection  
