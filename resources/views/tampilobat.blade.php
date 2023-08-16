<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    {{-- <form action="{{ route('update') }}" method="put">/ --}}
      <h1 style="text-align: center; margin-top:2%;font-family:optima;">DATA OBAT</h1>

      @csrf
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <table class="table table-striped mx-auto"style="width: 80%;margin-top:5%;">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ID Obat</th>
            <th scope="col">Nama Obat</th>
            <th scope="col">Deskripsi Obat</th>
            <th scope="col">Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach($obat as $index => $data)
          <tr>
            
              <td>{{ $index + $obat->firstItem () }}</td>
              <td>{{$data->obat_id}}</td>
              <td>{{ $data->nama_obat }}</td>
              <td>{{ $data->deskripsi_obat }}</td>
              <td>{{ $data->harga_obat }}</td>
              <td>
                  <a href="/edit1/{{$data->id }}" class="btn btn-outline-primary">Edit</a>
                  <a href="/destroy1/{{$data->id}}"class="btn btn-outline-danger">Hapus</a>
                  
              </td>
          </tr>
          @endforeach
          
          
        </tbody>
    </table>
    <div style="margin-left: 10%;">
      {{ $obat->links() }}
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

