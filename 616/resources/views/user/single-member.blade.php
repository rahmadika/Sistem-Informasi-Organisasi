@extends('layouts.navbar')
@section('content')
<section id="profile">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            @foreach ( $anggota as $member )
            <h2>Biodata {{$member->name}}</h2>
        </div>     
        <div class="membercard">
            <table class="member" data-aos="fade-up">
                <tr>
                    <th colspan="3" align="center"><h3>Ream A Leizen</h3></th>
                </tr>
                <tr bgcolor="#e7e7e7">
                 <td width="150">Nama Lengkap :</td>
                 <td width="250">{{$member->name}}</td>
                 <td rowspan="4"><img src="{{ Storage::url($member->foto) }}" width="200"></td>
                </tr>
                <tr bgcolor="#e7e7e7">
                 <td>Tanggal Lahir :</td>
                 <td>{{$member->tgl_lhr}}</td>
                </tr>
                <tr bgcolor="#e7e7e7">
                 <td>Alamat :</td>
                 <td>{{$member->address}}</td>
                </tr>
                <tr bgcolor="#e7e7e7">
                 <td>Instagram :</td>
                 <td>{{$member->ig}}</td>
                </tr>
                <tr>
                 <th colspan="3" align="center"><a href="{{route('member.anggota')}}" class="btn btn-sm btn-dark">Kembali</a></th>
                </tr>
            </table>
            @endforeach
        </div>  
    </div>
</section>
@endsection