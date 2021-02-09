<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramaFormacione extends Model
{
    use HasFactory;
    protected $table="programa_formaciones";
    protected $primaryKey="id";
    protected $fillable=[
        'nombre','sigla','codigo'
    ];
    public function ficha(){
        return $this->hasMany('\App\Models\Ficha');
    }
}
