<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use Yajra\DataTables\DataTables;

class SertifikatController extends Controller
{
    public function index(Request $request)
    {

        $dataSertifikat  = Sertifikat::all();


        $cari = $request->cari;
        $dataSertifikat = Sertifikat::where('judul_sertifikat', 'like', "%$cari%")
            ->orWhere('tanggal_keluar', 'like', "%$cari%")
            ->get();



        return view('sertifikat.index', compact('dataSertifikat'));
    }
    public function create()
    {
        return view('sertifikat.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul_sertifikat' => 'required',
            'nama_peserta' => 'required',
            'nomor_sertifikat' => 'required|unique:sertifikat',
            // 'tanggal_keluar' => 'required',
            // 'tempat_kegiatan' => 'required',
            // 'penyelenggara' => 'required',
            // 'tipe_kegiatan' => 'required',
            // 'status' => 'required',
            'file' => 'required|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('files'), $fileName);

        $sertifikat = new Sertifikat;
        $sertifikat->judul_sertifikat = $request->judul_sertifikat;
        $sertifikat->nama_peserta = $request->nama_peserta;
        $sertifikat->nomor_sertifikat = $request->nomor_sertifikat;
        $sertifikat->tanggal_keluar = $request->tanggal_keluar;
        $sertifikat->tempat_kegiatan = $request->tempat_kegiatan;
        $sertifikat->penyelenggara = $request->penyelenggara;
        $sertifikat->tipe_kegiatan = $request->tipe_kegiatan;
        $sertifikat->status = $request->status;
        $sertifikat->file = $fileName;
        $sertifikat->save();
        return redirect('sertifikat')->with('success', 'Sertifikat berhasil ditambahkan.');
    }
    public function download($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        $filePath = public_path('files/' . $sertifikat->file);

        return response()->download($filePath, $sertifikat->file);
    }
    public function destroy(Sertifikat $sertifikat)
    {
        $sertifikat = Sertifikat::findOrFail($sertifikat->id);
        $sertifikat->delete();
        return redirect()->back()->with('success', 'Sertifikat berhasil dihapus.');
    }
}
