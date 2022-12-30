<?php

namespace App\Http\Controllers;
use Carbon;
use App\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function get(){
        $pinjaman = Pinjaman::latest()->get();
        return view('pinjaman.index',compact('pinjaman'));
    }
    public function store(Request $request){

        // $request->validate([
        //     'no_pinjam' => 'required',
        //     'nama' => 'required',
        //     'keterangan' => 'required',
        //     'no_laptop' => 'required',
        //     'tgl_pinjam' => 'required',
        //     'tgl_kembali' => 'required',
        // ]);


        $table_no = Pinjaman::get(); // nantinya menggunakan database dan table sungguhan
        $tgl = substr(str_replace( '-', '', Carbon\carbon::now()), 0,8);

        $no= $tgl.$table_no;
        $auto=substr($no,8);
        $auto=intval($auto)+1;
        $auto_number=substr($no,0,8).str_repeat(0,(4-strlen($auto))).$auto;
        // $n = 100101010;
        // $no_pinjam = '0000'  ;
        // $auto=substr($no_pinjam,4);
        // $auto=intval($auto)+1;
        // @for ($auto = 0000; $auto < $n; $auto++);
        $pinjaman = Pinjaman::create([
            'no_pinjam' =>$auto_number ,
            'nama'=>$request->nama,
            'keterangan'=>$request->keterangan,
            'no_laptop'=>$request->no_laptop,
            'tgl_pinjam'=>$request->tgl_pinjam,
            'tgl_kembali'=>$request->tgl_kembali,
        ]);

        return redirect()->to('/datapinjaman');

    }
    public function destroy($id){
    Pinjaman::where('id', $id)->delete();

    return redirect()->to('/datapinjaman');
    }
}
