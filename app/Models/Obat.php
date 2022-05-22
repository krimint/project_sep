<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jenis_Obat;
use App\Models\Supplier;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';

    protected $fillable = ['id_jenis','id_supplier','nama_obat','stock','harga_beli','harga_jual','status'];

    public function Jenis_Obat(){
        return $this->hasOne(Jenis_Obat::class,'id','id_jenis');
    }

    public function Supplier(){
        return $this->hasOne(Supplier::class,'id', 'id_supplier');
    }
}
