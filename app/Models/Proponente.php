<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proponente extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'proponente';

    protected $fillable = [
        'codigo',
        'nome',
        'cnpj',
        'endereco',
        'cep',
        'fone',
        'email',
        'ucontrato',
        'ramo',
        'scnpj',
        'fundacao',
        'socio1',
        'socio2',
        'socio3',
        'socio4',
        'scpf1',
        'scpf2',
        'scpf3',
        'scpf4',
        'sper1',
        'sper2',
        'sper3',
        'sper4',
        'faturamento',
        'desrecur',
        'pmeses',
        'fatdoze',
        'coligada1',
        'coligada2',
        'coligada3',
        'coligada4',
        'cocnpj1',
        'cocnpj2',
        'cocnpj3',
        'cocnpj4',
        'publica',
        'ubalacao',
        'cliente1',
        'cliente2',
        'cliente3',
        'forn1',
        'forn2',
        'forn3',
        'banco1',
        'banco2',
        'banco3',
        'ag1',
        'ag2',
        'ag3',
    ];
}
