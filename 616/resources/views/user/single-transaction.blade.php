@extends('layouts.navbar')
@section('content')
<section id="hero" class="d-flex">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Detail Transaksi</h2>
        </div>
        <div class="row">
            <div class="panel-body table-responsive">
                @foreach ( $tran as $transaction )
                <table class="table" width="100%" data-aos="fade-up">
                    <tbody>
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
                    </tbody>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection