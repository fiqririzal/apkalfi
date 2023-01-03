<?php

namespace App\Http\Controllers;
use PDF;
use Carbon;
use App\Pinjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class PinjamanController extends Controller
{
    public function get(){
        $pinjaman = Pinjaman::latest()->get();
        return view('pinjaman.index',compact('pinjaman'));
    }
    public function nomer(){
        $pinjaman   = Pinjaman::orderBy('created_at', 'desc');

        $q = DB::table('pinjaman')->select(DB::raw('MAX(RIGHT(no_pinjam,4))as kode'));
        $kd ="";
        if($q->count()>0)
        {
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd =sprintf("04%s",$tmp);

            }
        }
        else {
            $kd = '0001';
        }
        return view('pinjaman.index',compact('pinjaman','kd'));
    }
    public function store(Request $request)
    {
        $request->validate([
            // 'no_pinjam' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
            'no_laptop' => 'required',
            'tgl_pinjam' => 'required',
            // 'tgl_kembali' => 'required',

        ]);
        // $noUrutAkhir = \App\Barang::max('no_urut_surat');
        $table_no = Pinjaman::count(); // nantinya menggunakan database dan table sunggu
        // // $tgl = substr(str_replace( '-', '', Carbon\carbon::now()), 0,8);

        $no= $table_no;
        // $auto=substr($no,8);
        $auto=intval($no)+1;
        // $auto_number=sprintf($table_no + 1);
        $auto_number='INFO-P-L-'.str_repeat(0,(4-strlen($auto))).$auto;

        $pinjaman = Pinjaman::create([
            'no_pinjam' =>$auto_number ,
            'nama'=>$request->nama,
            'keterangan'=>$request->keterangan,
            'no_laptop'=>$request->no_laptop,
            'tgl_pinjam'=>$request->tgl_pinjam,
            'tgl_kembali'=>'',
        ]);
        return redirect()->to('/datapinjaman');
    }
    public function destroy($id){
    Pinjaman::where('id', $id)->delete();

    return redirect()->to('/datapinjaman');
    }
    public function cetak_pdf(){
        $pinjaman = Pinjaman::all();

        $pdf= PDF::loadView('pinjaman.print',compact('pinjaman'))->setPaper('a4', 'portrait');

        return $pdf->stream('printlaporan.pdf');
    }
    public function print_pdf($id){
        $pinjaman = Pinjaman::where('id',$id)->get();

        $pdf= PDF::loadView('pinjaman.printpdf',['pinjaman'=>$pinjaman])->setPaper('a4', 'portrait');

        return $pdf->stream('laporan.pdf');
    }
    public function edit($id){
    $pinjaman =Pinjaman::where('id',$id)->first();

    return view('pinjaman.edit',compact('pinjaman'));
    }
    public function update(Request $request, $id){
        $request->validate([
            // 'no_pinjam' => 'required',
            'nama' => 'required',
            'keterangan' => 'required',
            'no_laptop' => 'required',
            'tgl_pinjam' => 'required',
            // 'tgl_kembali' => 'required',

        ]);
        $pinjaman = Pinjaman::where('id',$id)->update([
            // 'no_pinjam' =>$auto_number ,
            'nama'=>$request->nama,
            'keterangan'=>$request->keterangan,
            'no_laptop'=>$request->no_laptop,
            'tgl_pinjam'=>$request->tgl_pinjam,
            'tgl_kembali'=>$request->tgl_kembali,
        ]);
        return redirect()->to('/datapinjaman');
    }
}
