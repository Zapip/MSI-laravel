@extends('adminlte::page')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Data</title>
    </head>

    <body>
        <div class="container mt-5">
            <h3 class="text-center">Edit Data Supplier</h3>
            <a href="{{ url('/supplier/tampil_data') }}" class="btn btn-secondary mb-3">Kembali</a>

            @foreach ($supplier as $s)
                <form action="{{ url('/supplier/update_data') }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" required="required" name="s_no" value="{{ $s->s_no }}" hidden>
                    <div class="form-group">
                        <label for="s_no">Nomor Supplier</label>
                        <input type="text" class="form-control" id="s_no" value="{{ $s->s_no }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $s->name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" value="{{ $s->kota }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            @endforeach
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

</body>

</html>
