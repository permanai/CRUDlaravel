<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="width: 100%;">
            <div class="col-4">
        <h1 style="text-align: center;margin-top:2%;font-family:optima">Transaksi Obat</h1>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>
            <div class="mb-3">
                <label for="no_telp_pelanggan" class="form-label">No Telpon</label>
                <input type="text" class="form-control" id="no_telp_pelanggan" name="no_telp_pelanggan" required>
            </div>
            <div class="mb-3">
                <label for="obat_id" class="form-label">ID Obat</label>
                <select class="form-select" id="obat_id" name="obat_id" required>
                    <option value="">Pilih Obat</option>
                    @foreach($allData as $obat)
                    <option value="{{ $obat->id }}" obat_id="{{$obat->obat_id}}" nama_obat="{{ $obat->nama_obat }}" harga_obat="{{ $obat->harga_obat }}">{{ $obat->obat_id }}</option>

                        {{-- <option value="{{ $obat->id }}" harga_obat="{{ $obat->harga_obat }}">{{ $obat->obat_id }}</option> --}}
                    @endforeach
                </select>
            </div>
            
            {{-- <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
            </div> --}}
            <script>
                document.getElementById('obat_id').addEventListener('change', function() {
                    var obatId = this.value;
            
                    // Mengambil nama obat dan harga obat dari obat yang dipilih
                    var selectedObat = document.querySelector(`option[value="${obatId}"]`);
                    var namaObat = selectedObat.getAttribute('nama_obat');
                    var hargaObat = selectedObat.getAttribute('harga_obat');
            
                    // Memasukkan nama obat dan harga obat ke dalam input nama_obat dan harga_obat
                    document.getElementById('nama_obat').value = namaObat;
                    document.getElementById('harga_obat').value = hargaObat;

                    document.getElementById('jumlah_beli').addEventListener('input', function() {
                    var jumlahBeli = parseInt(this.value);
                    var hargaObat = parseInt(document.getElementById('harga_obat').value);

                     // Menghitung total harga
                     var totalHarga = jumlahBeli * hargaObat;

        // Memasukkan hasil perkalian ke dalam input total_harga
        document.getElementById('total_harga').value = totalHarga;
    });
                });
            </script>
            {{-- <input type="hidden" id="hidden_obat_id" name="obat_id" required> --}}
             <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" required readonly>
            </div>
            <div class="mb-3">
                <label for="harga_obat" class="form-label">Harga Obat</label>
                <input type="text" class="form-control" id="harga_obat" name="harga_obat" required >
            </div>
            
            <div class="mb-3">
                <label for="jumlah_beli" class="form-label">Jumlah Beli</label>
                <input type="text" class="form-control" id="jumlah_beli" name="jumlah_beli" required oninput="calculateTotal()">
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" required readonly   >
            </div>            
                <button type="submit" class="btn btn-outline-primary" style="margin-bottom: 3%">Tambahkan</button>
                <a href="/index" class="btn btn-outline-warning" style="margin-bottom: 3%">Home</a>
            </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('sweetalert::alert')
</body>
</html>
