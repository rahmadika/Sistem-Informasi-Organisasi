@extends('layouts.main')
@extends('layouts.app')
@section('title') {{'Dashboard'}} @endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="small-box bg-primary">
        <div class="inner">
          @foreach ($upcoming_events as $data)
          <h4>{{$data->date}}</h4>
          @endforeach

          <p>Acara Yang Akan Datang</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>
        </div>
        <a href="{{ route('acaras.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          @foreach ($saldo as $data)
          <h4>Rp. {{$data->saldo}}</h4>
          @endforeach

          <p>Keuangan</p>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>
        </div>
        <a href="{{ route('transactions.index') }} "class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h4>{{$pengguna}}</h4>

          <p>User</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('register.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h4>{{$jumlah}}</h4>

          <p>Anggota RAL</p>
        </div>
        <div class="icon">
          <i class="ion ion-person"></i>
        </div>
        <a href="{{ route('anggotas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <iframe src="https://calendar.google.com/calendar/embed?height=400&wkst=1&bgcolor=%23616161&ctz=Asia%2FJakarta&showTitle=0&showNav=0&showPrint=0" style="border:solid 1px #777" width="600" height="400" frameborder="0" scrolling="no"></iframe>
  </div>
  
</div>
@endsection