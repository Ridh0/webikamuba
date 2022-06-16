<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Auth;
class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = DB::table('anggotamuba')->where('jabatan', 'Ketua')->get();
        $pengurus2 = DB::table('anggotamuba')->where('jabatan', 'Wakil Ketua')->get();
        $pengurus3 = DB::table('anggotamuba')->where('jabatan', 'Sekretaris')->get();
        $pengurus4 = DB::table('anggotamuba')->get();

        return view('frontend.pengurus', compact('pengurus','pengurus2','pengurus3','pengurus4'));
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
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    function check_pengurus(Request $request){
        //Validate Inputs
        $request->validate([
           'username'=>'required|exists:anggotamuba,username',
           'password'=>'required|min:5|max:30'
        ],[
            'username.exists'=>'This email is not exists in doctors table'
        ]);

        $creds = $request->only('username','password');

        if( Auth::guard('pengurus')->attempt($creds) ){
            return redirect()->route('pengurus.home');
        }else{
            return redirect()->route('pengurus.login')->with('fail','Salah username atau password :)');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengurus $pengurus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengurus $pengurus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengurus $pengurus)
    {
        //
    }
    function logout(){
        Auth::guard('pengurus')->logout();
        return redirect('/');
    }
}
