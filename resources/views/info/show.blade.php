@extends('layouts.app')

@section('title', 'Informasi')
@section('info_active', 'active')

@section('pageHeading')
<h1 class="h3 mb-0 text-gray-800">Data Informasi</h1>
@endsection

@section('content')   
<div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($info['data'] as $value)
                        <tr>
                            <td>{{ $value['id_info'] }}</td>
                            <td>{{ $value['judul'] }}</td>
                            <td>{{ $value['keterangan'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>         
@endsection

@section('customScripts')
<!-- Page level plugins -->
<script src="{{ asset('style/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('style/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('style/js/demo/datatables-demo.js') }}"></script>
@endsection