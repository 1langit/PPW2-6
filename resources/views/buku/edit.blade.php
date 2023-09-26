<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h4 class="mb-4">Tambah Buku</h4>
        <form method="POST" action="{{ route('buku.update', $buku->id) }}">
            @csrf
            <table>
                <tr><td>Judul buku</td><td><input type="text" name="judul" value="{{ $buku->judul }}"></td></tr>
                <tr><td>Penulis</td><td><input type="text" name="penulis" value="{{ $buku->penulis }}"></td></tr>
                <tr><td>Tanggal terbit</td><td><input type="text" name="tgl_terbit" value="{{ $buku->tgl_terbit }}"></td></tr>
                <tr><td>Harga</td><td><input type="text" name="harga" value="{{ $buku->harga }}"></td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="/buku" class="btn btn-primary">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
