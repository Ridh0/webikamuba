<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_All;
use App\Models\Kategori;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Data_All::all();
        return view('carousel.index', compact('carousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori= Kategori::all();
        return view('carousel.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
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
        $kategori= Kategori::where('id',$request->kategori_id)->get();
        foreach($kategori as $row){
            $nama_kategori = $row->nama;
        }
        $post = new Data_All;
        $post->kategori_id =  $request->kategori_id;
        $post->nama_kategori =  $nama_kategori;
        $post->file =  $profileImage;
        $post->save();
        return back()->withStatus(__('Profile successfully updated.'));
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
