<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transaksi_1462100069;
use App\Models\obat_1462100069;
class Transaksi1462100069Controller extends Controller
{

    public function index(Request $request)
    {
 
        $allData = Transaksi_1462100069 :: all();
        return view ('index',['data'=>$allData]);
        // return view ('index',compact('allData'));
    }
    public function create()
    {
        $allData = obat_1462100069::all();
    return view('transaksi', compact('allData'));

    }
    public function edit($id){
        $allData = Transaksi_1462100069::find($id); 
        $obatData = obat_1462100069::all(); // Mengambil data semua obat
        return view('edittamptrans', compact('allData', 'obatData'));
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan'=>'required',
            'no_telp_pelanggan'=>'required|numeric',
            'obat_id'=>'required|numeric',
            'nama_obat'=>'required',
            'harga_obat'=>'required|numeric',
            'jumlah_beli'=>'required|numeric',
            'total_harga'=>'required|numeric',
        ]);
        $allData= new Transaksi_1462100069;
        $allData->nama_pelanggan=$request->nama_pelanggan;
        $allData->no_telp_pelanggan=$request->no_telp_pelanggan;
        $allData->obat_id=$request->obat_id;
        $allData->nama_obat=$request->nama_obat;
        $allData->harga_obat=$request->harga_obat;
        $allData->jumlah_beli=$request->jumlah_beli;
        $allData->total_harga=$request->total_harga;
        $allData->save();
        // Transaksi_1462100069::create($request->all());
        // dd($request);
        return redirect ()->route('tampiltransaksi')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Request $request)
     {
        Transaksi_1462100069 :: where('id', $request->id)->update(
             [
                 'nama_pelanggan'=> $request->nama_pelanggan,
                 'no_telp_pelanggan'=> $request->no_telp_pelanggan,
                 'obat_id'=> $request->obat_id,
                 'nama_obat'=> $request->nama_obat,
                 'harga_obat'=>$request->harga_obat,
                 'jumlah_beli'=> $request->jumlah_beli,
                 'total_harga'=> $request->total_harga,
                 
             ]
             );
             return redirect()->route('tampiltransaksi')->with('success', 'Data Berhasil Diupdate');
     }

    public function tampiltrans(){
        $allData=Transaksi_1462100069::paginate(3);
        return view ('tampiltransaksi',compact('allData'));

    }   
    public function destroy( $id){
        $allData = Transaksi_1462100069::find($id); 
        $allData->delete();
        return redirect()->route('tampiltransaksi')->with('success', 'Data Berhasil Dihapus');
    }

}
