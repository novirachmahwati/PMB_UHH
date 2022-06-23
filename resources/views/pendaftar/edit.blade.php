@extends('layouts.app')

@section('title', 'Data Pendaftar')
@section('pendaftar_active', 'active')

@section('pageHeading')
<h1 class="h3 mb-0 text-gray-800">Data Pendaftar</h1>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
          <h4 class="h4 mb-0 text-gray-800 text-center">Verifikasi Data</h4>
          <hr>
          @foreach ($pendaftar['data'] as $value)  
          <form action="{{ route('pendaftar.update', $value['id_reg']) }}" method="POST">
              {{csrf_field()}}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label for="id_reg">No. Pendaftaran</label>
                <input type="text" class="form-control" name="id_reg" value="{{ $value['id_reg'] }}" readonly>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $value['nama'] }}" readonly>
              </div>
              <div class="form-group">
                <label for="status_bayar">Status Pembayaran</label>
                <input type="text" class="form-control" name="status_bayar" value="{{ $value['status_bayar'] }}" readonly>
              </div>
              <div class="form-group">
                <label for="status_daftar">Status Pendaftaran</label>
                <select class="form-control" name="status_daftar">
                  <option hidden>{{ $value['status_daftar'] }}</option>
                  <option>Belum Diverifikasi</option>
                  <option>Sudah Diverifikasi</option>
                  <option>Diterima</option>
                  <option>Ditolak</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </div>
          </form>
          @endforeach
        </div>
    </div>         
@endsection