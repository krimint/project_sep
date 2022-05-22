<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Obat;

class Jenis_Obat extends Model
{
    use HasFactory;

    protected $table = 'jenis_obat';

    protected $fillable = ['nama_jenis'];

    public function Obat(){
        return $this->belongsTo(Obat::class,'id_jenis','id');
    }
}
