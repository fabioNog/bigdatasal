<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psocios extends Model
{
    use HasFactory;

    protected $table =  'psocios';
    public $timestamps = false;

    protected $fillable = [
        'CODIGO',
        'NOME',
        'CPF',
        'ENDERECO',
        'CEP',
        'COMPLE',
        'CELULAR',
        'EMAIL',
        'NASCIONAL',
        'NATURAD',
        'RGD',
        'CNH',
        'PAI',
        'MAE',
        'ATIVIDADE',
        'TRABALHO',
        'TRAENDERECO',
        'TRAFONE',
        'TRAEMAIL',
        'TRAATIVIDADE',
        'SOCIONOME1',
        'SOCIONOME2',
        'CNPJ1',
        'CNPJ2',
        'PART1',
        'PART2',
        'IENDERECO1',
        'IENDERECO2',
        'IENDERECO3',
        'MATRICULA1',
        'MATRICULA2',
        'MATRICULA3',
        'REGISTRO1',
        'REGISTRO2',
        'REGISTRO3',
        'CARRO1',
        'CARRO2',
        'ANOMOD1',
        'ANOMOD2',
        'PLACA1',
        'PLACA2',
        // Adicione os outros campos conforme necessário
    ];
}
