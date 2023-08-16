{{-- @use App\Models\obat_1462100069;
@use App\Models\transaksi_1462100069; --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align: center; margin-top:2%;font-family:optima">DATA TRANSAKSI</h1>
    {{-- <form action="{{ route('update') }}" method="put">
      @csrf --}}
      {{-- @use App\Models\obat_1462100069; --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <table class="table table-striped mx-auto"style="width: 80%;margin-top:5%">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">No Telp</th>
            <th scope="col">ID Obat</th>
            <th scope="col">Nama Obat</th>
            <th scope="col">Harga Obat</th>
            <th scope="col">Jumlah Beli</th>
            <th scope="col">Total Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach($allData as $index => $data)
          <tr>
            <td>{{ $index + $allData->firstItem () }}</td>
              <td>{{ $data->nama_pelanggan }}</td>
              <td>{{ $data->no_telp_pelanggan }}</td>
              <td>{{ $data['obat_1462100069']['obat_id'] }}</td>
              {{-- <td>{{ $data->obat_id}}</td> --}}
              <td>{{ $data->nama_obat }}</td>
              <td>{{ $data->harga_obat}}</td>
              <td>{{ $data->jumlah_beli }}</td>
              <td>{{ $data->total_harga }}</td>
              <td>
                  <a href="/edit/{{$data->id }}" class="btn btn-outline-primary">Edit</a>
                  <a href="/destroy/{{$data->id}}" class="btn btn-outline-danger">Hapus</a>
                  {{-- <a href="/index" class="btn btn-warning">Home</a> --}}
              </td>
          </tr>
          @endforeach
          
          
        </tbody>
    </table>
    <div style="margin-left: 10%;">
      {{ $allData->links() }}
    </div>
    <a href="/index" class="btn btn-outline-warning" style="margin-left: 10%;">Home</a>
      @include('sweetalert::alert')
      <footer style="background-color: aqua; height: 120px;">
        <h5 style="text-align: center;color:black;margin-top:10%;">
          Permana Iswahyudi
        </h5>
        <h6 style="text-align: center;color:black;">
          Hubungi Kami
        </h6>
        <div style="text-align: center;">
          <img src="css1/wa1.png" alt="apotek" style="width: 2.7%; height: 2.7%; display: inline-block; margin-left: auto; margin-right: auto;">
          <img src="css1/ig1.png" alt="apotek" style="width: 3%; height: 3%; display: inline-block; margin-left: auto; margin-right: auto;">
          <img src="css1/telp1.png" alt="apotek" style="width: 2.5%; height: 2.5%; display: inline-block; margin-left: auto; margin-right: auto;">
        </div>
        
      </footer>
  </body>
</html>

