@extends('layouts.main')
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        {{-- <p class="lead m-0">Biodata {{$anggota->name}}</p> --}}
        <a href="{{route('anggotas.index')}}" class="btn btn-sm btn-dark">Kembali</a>
    </div>

        <div class="card-body">

          <table class="table">
            <thead>
              @foreach ( $anggota as $member )
              <img src="{{ Storage::url($member->foto) }}" width="200">
              <tr>
                <th>Nama Lengkap :</th>
                <th>{{$member->name}}</th>
              </tr>
              <tr>
                <th>Tanggal Lahir :</th>
                <th>{{$member->tgl_lhr}}</th>
              </tr>
              <tr>
                <th>Alamat :</th>
                <th>{{$member->address}}</th>
              </tr>
              <tr>
                <th>Instagram :</th>
                <th>{{$member->ig}}</th>
              </tr>
            </thead>
              @endforeach
              

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

                @forelse ($anggota as $anggota)
                    <tr>
                      <td>{{$loop->iteration}}</td>

                      <td>{{$anggota->name}}</td>
                        
                        <td>{{$anggota->tgl_lhr}}</td>
                        
                        <td>{{$anggota->address}}</td>
                        
                        <td>{{$anggota->ig}}</td>
                        
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
