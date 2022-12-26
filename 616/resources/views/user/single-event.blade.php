@extends('layouts.navbar')
@section('content')
<section id="hero" class="d-flex">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            @foreach ( $acara as $event )
            <h2>Acara {{$event->name}}</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="display d-flex justify-content-center" width="100%">
                    <thead>
                    
                    <tr>
                        <th>Nama Acara</th>
                        <th>:</th>
                        <th><td>{{$event->name}}</td></th>
                    </tr>
                    <tr>
                        <th>Deskripsi Acara</th>
                        <th>:</th>
                        <th><td>{{$event->description}}</td></th>
                    </tr>
                    <tr>
                        <th>Waktu Acara</th>
                        <th>:</th>
                        <th><td>{{$event->date}}<td></th>
                    </tr>
                    <tr>
                        <th>Tempat Pelaksanaan</th>
                        <th>:</th>
                        <th><td>{{$event->place}}<td></th>
                    </tr>
                    <tr>
                        <th>Penanggung Jawab Acara</th>
                        <th>:</th>
                        <th><td>{{$event->anggota->name}}</td></th>
                    </tr>
                    </thead>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection