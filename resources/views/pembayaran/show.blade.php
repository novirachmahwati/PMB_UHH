@extends('layouts.app')

@section('title', 'Data Pembayaran')
@section('pembayaran_active', 'active')

@section('pageHeading')
<h1 class="h3 mb-0 text-gray-800">Data Pembayaran</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Download as PDF</a>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="h4 mb-0 text-gray-800">Detail Pembayaran</h4>
            <br>
            @foreach ($pembayaran['data'] as $value)
            <a href="{{ route('pembayaran.edit', $value['id_reg']) }}">Verifikasi Data</a>
            <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">
                    <tr>
                        <td>No. Pendaftaran</td>
                        <td class="text-right">{{ $value['id_reg'] }}</td>
                        
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td class="text-right">{{ $value['nama'] }}</td>
                    </tr>
                    <tr>
                        <td>No. Virtual Account</td>
                        <td class="text-right">9881041219610220</td>
                        
                    </tr>
                    <tr>
                        <td width="50%">Bukti Transfer</td>
                        <td><img class="border float-right" width="40%" src="{{ asset('style/img/bukti_tf.jpg') }}"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembayaran</td>
                        <td class="text-right">{{ $value['tgl_bayar'] }}</td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td class="text-right">{{ $value['status_bayar'] }}</td>
                    </tr>
                </table>
            </div>
            @endforeach
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