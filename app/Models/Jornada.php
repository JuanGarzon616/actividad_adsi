<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;
    protected $table="jornadas";
    protected $primaryKey="id";
    protected $fillable=[
        'nombre'
    ];
    public function ficha(){
        return $this->hasMany('\App\Models\Ficha');
    }
}
