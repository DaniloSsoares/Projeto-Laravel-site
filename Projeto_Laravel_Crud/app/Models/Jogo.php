<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $fillable = [
"titulo",
"anolanc",
"classi",
"genero",
"pontuacao",
"plataforma",
"empresa",
"capa",

    ];
    public function getCapaUrlAttribute(){
        if($this->capa){
            //Asset usado em laravel para armazernar uma url dentro de uma pasta
            return asset('storage/' . $this->capa);
        }
        return null;
    }
}
