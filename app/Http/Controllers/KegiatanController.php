<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_All;
use App\Models\Kategori;

class KegiatanController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $kegiatan = Data_All::where('nama_kategori', 'kegiatan')->get();
        return view('kegiatan.index', compact('kegiatan', 'kategori'));
    }

    public function create()
    {
        $kategori = Kategori::all();

        return view('kegiatan.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'file' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);


        if ($image = $request->file('file')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $post['file'] = "$profileImage";
        } else {
            $profileImage = $request->file('file');
        }
        $kategori = Kategori::where('id', $request->kategori_id)->get();
        foreach ($kategori as $row) {
            $nama_kategori = $row->nama;
        }
        $post = new Data_All;
        $post->name = $request->name;
        $post->kategori_id =  $request->kategori_id;
        $post->nama_kategori =  $nama_kategori;
        $post->desc = $request->desc;
        $post->file =  $profileImage;
        $post->save();
        return back()->withStatus(__('Profile successfully updated.'));
    }
}
