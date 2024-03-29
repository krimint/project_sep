<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Obat;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';

    protected $fillable = ['nama_supplier','tempat_supplier','status'];

    public function Obat(){
        return $this->belongsTo(Obat::class,'id_supplier','id');
    }
}
