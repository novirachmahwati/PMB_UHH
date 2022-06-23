@extends('layouts.app')

@section('title', 'Informasi')
@section('info_active', 'active')

@section('pageHeading')
<h1 class="h3 mb-0 text-gray-800">Data Informasi</h1>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            @foreach ($info['data'] as $value) 
            <form action="{{ route('info.update', $value['id_info']) }}" method="POST">
                {{csrf_field()}}
                {{ method_field('PUT') }}    
                <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{ $value['judul'] }}">
                </div>
                <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="ckeditor form-control" name="deskripsi" value="{{ $value['deskripsi'] }}"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>         
@endsection

@section('customScripts')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection