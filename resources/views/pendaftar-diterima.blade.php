@extends('layouts.app')

@section('title', 'Data Pendaftar')
@section('pembayaran_active', 'active')

@section('pageHeading')
<h1 class="h3 mb-0 text-gray-800">Data Pendaftar Diterima</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Download as PDF</a>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. Pendaftaran</th>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                        </tr>
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