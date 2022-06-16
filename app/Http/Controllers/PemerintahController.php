<?php

namespace App\Http\Controllers;

use App\Models\Pemerintah;
use Illuminate\Http\Request;

class PemerintahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemerintah = Pemerintah::all();
        return view('pemerintah.index', compact('pemerintah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('pemerintah.create');
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
            'name' => 'required',
            'content' => 'required',
            'kategori' => 'required',
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
    
        $post = new Pemerintah;
        $post->name = $request->name;
        $post->content = $request->content;
        $post->intro =  $profileImage;
        $post->category_name =  $request->kategori;
        $post->save();
        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemerintah  $pemerintah
     * @return \Illuminate\Http\Response
     */
    public function show(Pemerintah $pemerintah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemerintah  $pemerintah
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemerintah $pemerintah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemerintah  $pemerintah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemerintah $pemerintah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemerintah  $pemerintah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemerintah $pemerintah)
    {
        //
    }
}
