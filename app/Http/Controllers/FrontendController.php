<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Data_All;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Data_All::where('nama_kategori','carousel')->get();
        $kegiatan = Data_All::where('nama_kategori','kegiatan')->cursorPaginate(2);
        $pengurus = DB::table('anggotamuba')->where('jabatan', 'Ketua')->get();
        $wisatas = DB::table('wisata')->orderBy('id')->cursorPaginate(3);
        $wisata = DB::table('wisata')->get();
        return view('frontend.index', compact('wisata','carousel','kegiatan','pengurus'));
    }
    public function dataumum()
    {
    return view('frontend.dataumum');
    }
    public function galeri()
    {
        $galeri = Data_All::where('nama_kategori','kegiatan')->get();
    return view('frontend.galeri', compact('galeri'));
    }
    public function kegiatan()
    {
        $kegiatan = Data_All::where('nama_kategori','kegiatan')->get();

    return view('frontend.kegiatan', compact('kegiatan'));
    }
    public function showkegiatan($kegiatans)
    {
        $kegiatan = Data_All::find($kegiatans);
        $kegiatanlain= Data_All::where('id','!=', $kegiatans)->where('nama_kategori','kegiatan')->get();
    return view('frontend.kegiatan.show', compact('kegiatan','kegiatanlain'));
    }
    public function tujuan()
    {
    return view('frontend.tujuan');
    }
    public function visimisi()
    {
    return view('frontend.visimisi');
    }
    public function sejarah()
    {
    return view('frontend.sejarah');
    }
    public function pengumuman()
    {
    return view('frontend.pengumuman');
    }
    public function strukturorganisasi()
    {
    return view('frontend.strukturorganisasi');
    }
    public function pengurus()
    {
        $pengurus = DB::table('anggotamuba')->where('jabatan', 'Ketua')->get();
        $pengurus2 = DB::table('anggotamuba')->where('jabatan', 'Wakil Ketua')->get();
                $pengurus3 = DB::table('anggotamuba')->where('jabatan', 'Sekretaris')->get();
     $pengurus4 = DB::table('anggotamuba')->where('jabatan', 'Ketua Umum')->get();
          $pengurus5 = DB::table('anggotamuba')->where('jabatan', 'Sekretaris Umum')->get();
                $pengurus6 = DB::table('anggotamuba')->where([

        ['dewan', 'Pengurus Harian'],

       

    ])->skip(1)->take(8)->get();
        $pengurus7 = DB::table('anggotamuba')->where('jabatan', 'anggota')->get();

        return view('frontend.pengurus', compact('pengurus','pengurus2','pengurus4','pengurus3','pengurus5','pengurus6','pengurus7'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
