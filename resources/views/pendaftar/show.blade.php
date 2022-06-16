@extends('layouts.app')

@section('title', 'Data Pendaftar')
@section('pendaftar_active', 'active')

@section('pageHeading')
<h1 class="h3 mb-0 text-gray-800">Data Pendaftar</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Download as PDF</a>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="h4 mb-0 text-gray-800">Detail Data Pribadi</h4>
            <br>
            @foreach ($pendaftar['data'] as $value)
            <a href="{{ route('pendaftar.edit', $value['id_reg']) }}">Verifikasi Data</a>
            <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">
                    <tr>
                        <td></td>
                        <td><img class="border float-right" width="20%" src="{{ asset('style/img/profile.png') }}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><img class="float-right" width="20%" src="{{ asset('style/img/barcode.png') }}"></td>
                    </tr>
                    <tr>
                        <td>No. Pendaftaran</td>
                        <td class="text-right">{{ $value['id_reg'] }}</td>
                        
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td class="text-right">{{ $value['nama'] }}</td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td class="text-right">{{ $value['ttl'] }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="text-right">{{ $value['email'] }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td class="text-right">{{ $value['jenis_kel'] }}</td>
                    </tr>
                    
                    <tr>
                        <td>Agama</td>
                        <td class="text-right">{{ $value['agama'] }}</td>
                    </tr>
                    <tr>
                        <td>Nomor HP/WA</td>
                        <td class="text-right">{{ $value['no_hp'] }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td class="text-right">{{ $value['alamat'] }}</td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td class="text-right">{{ $value['asal_sekolah'] }}</td>
                    </tr>
                    <tr>
                        <td>Jurusan Sekolah</td>
                        <td class="text-right">{{ $value['jurusan_sekolah'] }}</td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td class="text-right">{{ $value['nisn'] }}</td>
                    </tr>
                    <tr>
                        <td>Jurusan Kuliah yang Dipilih</td>
                        <td class="text-right">{{ $value['prodi'] }}</td>
                    </tr>
                    <tr>
                        <td>Status Pendaftaran</td>
                        <td class="text-right">{{ $value['status_daftar'] }}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="h4 mb-0 text-gray-800">Detail Data Orang Tua</h4>
            <br>
            <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">
                    <tr>
                        <td>Nama Ayah</td>
                        <td class="text-right">{{ $value['nama_ayah'] }}</td>
                        
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td class="text-right">{{ $value['status_ortu'] }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td class="text-right">{{ $value['pekerjaan'] }}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td class="text-right">{{ $value['penghasilan'] }}</td>
                    </tr>
                    <tr>
                        <td>Nomor HP/WA</td>
                        <td class="text-right">{{ $value['no_hp_ortu'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="h4 mb-0 text-gray-800">Detail Data Nilai</h4>
            <br>
            <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">
                    <tr>
                        <td>Nilai Ijazah</td>
                        <td class="text-right">{{ $value['nilai_ijazah'] }}</td>
                        
                    </tr>
                    <tr>
                        <td>Nilai Transkrip</td>
                        <td class="text-right">{{ $value['nilai_transkip'] }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4 class="h4 mb-0 text-gray-800">Detail Pembayaran</h4>
            <br>
            <div class="table-responsive">
                <table class="table" width="100%" cellspacing="0">
                    <tr>
                        <td>Kode Referensi</td>
                        <td class="text-right">{{ $value['status_daftar'] }}</td>
                        
                    </tr>
                    <tr>
                        <td width="50%">Bukti Transfer</td>
                        <td><img class="border float-right" width="40%" src="{{ asset('style/img/bukti_tf.jpg') }}"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembayaran</td>
                        <td class="text-right">{{ $value['status_daftar'] }}</td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td class="text-right">{{ $value['status_daftar'] }}</td>
                    </tr>
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