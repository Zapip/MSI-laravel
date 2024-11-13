@extends('adminlte::page')

@section('content')
    <div class="container mt-5">
        <h3>Data Supplier</h3>
        <br />
        <form action="{{ url('/supplier/simpan_data') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="s_no">Nomor Supplier</label>
                <input type="text" class="form-control" id="s_no" name="s_no" required="required">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required="required">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" required="required">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
