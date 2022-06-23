@extends('layouts.app')

@section('title', 'Data Pendaftar')
@section('pembayaran_active', 'active')

@section('pageHeading')
<h1 class="h3 mb-0 text-gray-800">Data Pembayaran</h1>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
          <h4 class="h4 mb-0 text-gray-800 text-center">Verifikasi Data</h4>
          <hr>
          @foreach ($pembayaran['data'] as $value)  
          <form action="{{ route('pembayaran.update', $value['id_user']) }}" method="POST">
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
              <label for="tgl_bayar">Tanggal Pembayaran</label>
              <input type="datetime" class="form-control" name="tgl_bayar" value="{{ $value['tgl_bayar'] }}" readonly>
            </div>
            <div class="row g-3">
              <div class="col">
                <div class="form-group">
                  <label for="no_virtual_account">No. Virtual Account</label>
                  <input type="text" class="form-control" name="no_virtual_account" value="9881041219610220" readonly>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="bukti_transfer">Bukti Transfer</label><br>
                  <img class="border" width="40%" name="bukti_transfer" src="{{ asset('style/img/bukti_tf.jpg') }}">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="status_bayar">Status Pembayaran</label>
              <select class="form-control" name="status_bayar">
                <option hidden>{{ $value['status_bayar'] }}</option>
                <option>Belum Bayar</option>
                <option>Belum Diverifikasi</option>
                <option>Diverifikasi</option>
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