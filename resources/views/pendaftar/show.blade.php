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
            <a href="{{ route('pendaftar.edit', 22811020001) }}">Verifikasi Data</a>
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
                        <td class="text-right">22811020001</td>
                        
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td class="text-right">Ismail Farqoni Fajarullah</td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td class="text-right">Yogyakarta, 5 Mei 2000</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="text-right">ismail_farqoni@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td class="text-right">Laki-Laki</td>
                    </tr>
                    
                    <tr>
                        <td>Agama</td>
                        <td class="text-right">Islam</td>
                    </tr>
                    <tr>
                        <td>Nomor HP/WA</td>
                        <td class="text-right">081240410873</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td class="text-right">Dusun Babakan RT 09 RW 02 Desa Parigi, Kec Parigi, Kab Pangandaran</td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td class="text-right">SMKN 1 Pangandaran</td>
                    </tr>
                    <tr>
                        <td>Jurusan Sekolah</td>
                        <td class="text-right">Komputer dan Jaringan</td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td class="text-right">0001452534</td>
                    </tr>
                    <tr>
                        <td>Jurusan Kuliah yang Dipilih</td>
                        <td class="text-right">S1 - Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pendaftaran</td>
                        <td class="text-right">2022-5-5 15:33:40</td>
                    </tr>
                    <tr>
                        <td>Status Pendaftaran</td>
                        <td class="text-right">Belum Diverifikasi</td>
                    </tr>
                </table>
            </div>
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
                        <td class="text-right">Harun Rasyid</td>
                        
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td class="text-right">Masih Ada</td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td class="text-right">S1</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td class="text-right">Wiraswasta</td>
                    </tr>
                    <tr>
                        <td>Penghasilan</td>
                        <td class="text-right">5jt-10jt</td>
                    </tr>
                    <tr>
                        <td>Nomor HP/WA</td>
                        <td class="text-right">081234090822</td>
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
                        <td class="text-right">83.6</td>
                        
                    </tr>
                    <tr>
                        <td>Nilai Transkrip</td>
                        <td class="text-right">85.2</td>
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
                        <td class="text-right">208096</td>
                        
                    </tr>
                    <tr>
                        <td width="50%">Bukti Transfer</td>
                        <td><img class="border float-right" width="40%" src="{{ asset('style/img/bukti_tf.jpg') }}"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembayaran</td>
                        <td class="text-right">2022-5-5 20:40:00</td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td class="text-right">Belum Diverifikasi</td>
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