@extends('adminlte::page')

@section('content')
    <html>

    <head>
        <title>Tampil Data Supplier</title>
    </head>

    <body>
        <div class="container mt-5">
            <h3 class="mb-4">Data Supplier</h3>

            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nomor Supplier</th>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $s)
                        <tr>
                            <td>{{ $s->s_no }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->kota }}</td>
                            <td><a href="{{ url('/supplier/edit_data/' . $s->s_no) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td><a href="{{ url('/supplier/hapus_data/' . $s->s_no) }}"
                                    class="btn btn-danger btn-sm">Hapus</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
