<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class BudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budaya = Budaya::all();
        return view('budaya.index', compact('budaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('budaya.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'foto' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
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
    
        $post = new Budaya;
        $post->name = $request->name;
        $post->content = $request->content;
        $post->intro =  $profileImage;
        $post->save();
        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function show(Budaya $budaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function edit(Budaya $budaya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budaya $budaya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budaya $budaya)
    {
        //
    }
}
