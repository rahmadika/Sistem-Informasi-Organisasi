@extends('layouts.navbar')
@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Acara</h2>
        </div>

        <div class="row">

            <div class="panel-body table-responsive">
                <table class="display" width="100%" data-aos="fade-up">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Acara</th>                                             
                            {{-- <th>Detail Acara</th>                                               --}}
                            <th>Waktu Acara</th>
                            {{-- <th>Tempat Pelaksanaan</th> --}}
                            {{-- <th>Penanggung Jawab</th> --}}
                            <th>Detail</th>
                                        
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($events as $event)
                        <tr>
                        <td>{{$loop->iteration}}</td>

                        <td>{{$event->name}}</td>
                            
                            {{-- <td>{{Str::limit($event->description,10)}}</td> --}}
                            
                            <td>{{$event->date}}</td>
                            
                            {{-- <td>{{$event->nk}}</td> --}}
                            
                            {{-- <td>{{Str::limit($event->place,10)}}</td> --}}

                            {{-- <td>{{$event->anggota->name}}</td> --}}
                            <td>
                                <a href="{{ route('event.show', $event->id) }}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
  </section><!-- End Contact Section -->
@endsection  
