<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategoriGaleri extends Model
{
    use SoftDeletes;

    protected $table='kategori_galeri';

    protected $fillable=[
        'nama', 'users_id'
    ];

    protected $casts=[
        'Deleted_at'=>'datetime'
        
    ];
}
