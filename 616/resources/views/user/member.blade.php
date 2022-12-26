@extends('layouts.navbar')
@section('content')
<section id="news" class="d-flex">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Anggota</h2>
        </div>

        <div class="section-body">
            <table class="display table-bordered" id="table" width="100%" data-aos="fade-left">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th width="9%">Aksi</th>
                    </tr>
                </thead>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
                <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                {{-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> --}}
                <script>
                    $(function () {
                
                            $('#table').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: "{{ route('member.list') }}",
                            columns: [
                                { data: 'name', name: 'name' },
                                {
                                    data: 'action', 
                                    name: 'action', 
                                    orderable: false, 
                                    searchable: false
                                },
                            ]
                        });   
                    });
                </script>
            </table>
        </div>
    </div>
</section>