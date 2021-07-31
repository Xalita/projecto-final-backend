<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = ['locar','valor','tipo_de_imovel','foto_imovel'];

    protected $table = 'imoveis';

    public function getValor() {
        return $this->valor;
    }


}
