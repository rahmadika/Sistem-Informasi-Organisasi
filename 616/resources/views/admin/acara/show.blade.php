@extends('layouts.main')
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
        <table class="table d-flex justify-content-center">
            <thead>
            <tr>
                <th>Nama event</th>
                <th>:</th>
                <th><td>{{$acara->name}}</td></th>
            </tr>
            <tr>
                <th>Deskripsi event</th>
                <th>:</th>
                <th><td>{{$acara->description}}</td></th>
            </tr>
            <tr>
                <th>Waktu event</th>
                <th>:</th>
                <th><td>{{$acara->date}}<td></th>
            </tr>
            <tr>
                <th>Tempat Pelaksanaan</th>
                <th>:</th>
                <th><td>{{$acara->place}}<td></th>
            </tr>
            <tr>
                <th>Penanggung Jawab event</th>
                <th>:</th>
                <th><td>{{$acara->anggota->name}}</td></th>
            </tr>
            </thead>
        </table>

        </div>
    </div>
</div>
@endsection