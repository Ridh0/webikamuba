<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_All extends Model
{
    use HasFactory;
    protected $table = 'weball';
    protected $fillable=[
        'name',
        'file',
        'desc',
        'status',
        'jenis',
        'user_id',
        'kategori_id',
        'nama_kategori',
    ];

    public function kategori()
    {
        return $this -> belongsTo('App\Models\Kategori');
    }


}
