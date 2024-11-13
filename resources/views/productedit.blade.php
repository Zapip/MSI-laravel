<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi dengan Laravel</title>
</head>

<body>
    <center>
        <h1>Sistem Informasi dengan Laravel</h1>
        <h3>Edit data</h3>
    </center>
    <form action="{{ route('edit', $product->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <table style="margin:20px auto;">
            <tr>
                <td>produk</td>
                <td><input type="text" name="produk" value="{{ $product->produk }}"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value="{{ $product->harga }}"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value="{{ $product->jumlah }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>
