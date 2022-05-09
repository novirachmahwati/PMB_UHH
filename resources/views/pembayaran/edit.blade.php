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
          <form>
                <div class="form-group">
                  <label for="no_pendaftaran">No. Pendaftaran</label>
                  <input type="text" class="form-control" name="no_pendaftaran" value="22811020001" readonly>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" name="nama" value="Ismail Farqoni Fajarullah" readonly>
                </div>
                <div class="form-group">
                  <label for="no_virtual_account">No. Virtual Account</label>
                  <input type="text" class="form-control" name="no_virtual_account" value="9881041219610220" readonly>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal Pembayaran</label>
                  <input type="datetime" class="form-control" name="tanggal" value="2022-5-5 20:40:00" readonly>
                </div>
                <div class="row g-3">
                  <div class="col">
                    <div class="form-group">
                      <label for="kode_referensi">Kode Referensi</label>
                      <input type="text" class="form-control" name="kode_referensi" value="208026" readonly>
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
                  <label for="status_pembayaran">Status Pembayaran</label>
                  <select class="form-control" name="status_pembayaran">
                    <option>Belum Diverifikasi</option>
                    <option>Diverifikasi</option>
                  </select>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary btn-block">Submit</button>
                </div>
              </form>
        </div>
    </div>         
@endsection