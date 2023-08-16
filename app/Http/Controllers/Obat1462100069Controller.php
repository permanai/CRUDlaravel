<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat_1462100069;

class Obat1462100069Controller extends Controller
{
    public function profile()
{
    return view('profile');
}
public function obat()
{
    return view('obat');
}
public function periksa()
{
    return view('periksa');
}
public function konsul()
{
    return view('konsul');
}
    public function index(Request $request)
    {
 
        $allData = obat_1462100069 :: all();
        // $allData = obat_1462100069 :: paginate(2);
        return view ('index',['data'=>$allData]);
        // return view ('index',compact('allData'));
    }
    public function create()
    {
        return view ('daftarobat');
    }

    public function edit1($id){
        $allData = obat_1462100069::find($id); 
        return view('edittampobat',compact('allData'));
    }
    public function store1(Request $request)
    {
        $request->validate([
            'obat_id'=>'required|numeric',
            'nama_obat'=>'required',
            'deskripsi_obat'=>'required',
            'harga_obat'=>'required|numeric',
            
        ]);
        $obat= new obat_1462100069;
        $obat->obat_id=$request->obat_id;
        $obat->nama_obat=$request->nama_obat;
        $obat->deskripsi_obat=$request->deskripsi_obat;
        $obat->harga_obat=$request->harga_obat;
        $obat->save();
        // Transaksi_1462100069::create($request->all());
        // dd($request);
        return redirect ()->route('tampilobat')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update1(Request $request)
     {
        obat_1462100069 :: where('id', $request->id)->update(
             [
                 'obat_id'=>$request->obat_id,
                 'nama_obat'=> $request->nama_obat,
                 'deskripsi_obat'=> $request->deskripsi_obat,
                 'harga_obat'=> $request->harga_obat,
             ]
             );
             return redirect()->route('tampilobat')->with('success', 'Data Berhasil Diupdate'); 
     }

    public function tampilobat(){
        $obat=obat_1462100069::paginate(3);
        return view ('tampilobat',compact('obat'));
        // $obat = obat_1462100069::paginate(2); // Menampilkan 10 item per halaman
        // return view('tampilobat', compact('obat'));
    }   
    public function destroy1( $id){
        $allData = obat_1462100069::find($id); 
        $allData->delete();
        // return response()->json(['status'=>"data terhapus"]);
        return redirect()->route('tampilobat')->with('success', 'Data Berhasil Dihapus');

    }

}



