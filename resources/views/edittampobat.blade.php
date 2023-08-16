<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="width: 100%;">
            <div class="col-4">
        <h1 style="text-align: center;mergin-top:2%;font-family:optima">Daftar Obat</h1>
        <form action="/update1/{{$allData->id}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_obat" class="form-label">ID Obat</label>
                <input type="text" class="form-control" id="obat_id" name="obat_id" value="{{$allData->obat_id}}" required>
            </div>
            <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{$allData->nama_obat}}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_obat" class="form-label">Deskripsi Obat</label>
                <input type="text" class="form-control" id="deskripsi_obat" name="deskripsi_obat" value="{{$allData->deskripsi_obat}}" required>
            </div>
            <div class="mb-3">
                <label for="harga_obat" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga_obat" name="harga_obat" value="{{$allData->harga_obat}}" required>
            </div>
            <button type="submit" class="btn btn-outline-primary">Update</button>
            <a href="/tampilobat" class="btn btn-outline-warning">Kembali</a>
        </form>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
