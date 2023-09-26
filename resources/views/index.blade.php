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
        <h1>Data Buku</h1>
        <p align="right"><a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a></p>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Judul buku</th>
                    <th>Penulis</th>
                    <th>Tgl. Terbit</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_buku as $buku)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ date('d/m/y', strtotime($buku->tgl_terbit)) }}</td>
                        <td>{{ "Rp".number_format($buku->harga, 2, ',', '.') }}</td>
                        <td>
                            <div class="d-flex">
                                <form method="POST" action="{{ route('buku.edit', $buku->id) }}" class="me-2">
                                    @csrf
                                    <button class="btn btn-warning">Update</button>
                                </form>
                                <form method="POST" action="{{ route('buku.destroy', $buku->id) }}">
                                    @csrf
                                    <button onclick="return confirm('Yakiiin?')" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <p>{{ "Jumlah data: ".$jumlah_data }} buku</p>
        <p>{{ "Total harga: Rp".number_format($total_harga, 2, ',', '.') }}</p>
    </div>
</body>
</html>