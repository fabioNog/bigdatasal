<?php

namespace App\Http\Controllers;
use App\Models\Psocios;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PsociosController extends Controller
{


    public function index(): View{
        return view('psocios.index');
    }

    public function store(Request $request)
    {
       // dd($request);
        $request->validate([
            'CODIGO' => 'required|max:50',
            'NOME' => 'required|max:50',
            'CPF' => 'required|max:20',
            'ENDERECO' => 'required|max:50',
            'CEP' => 'required|max:9',
            'COMPLE' => 'required|max:20',
            'CELULAR' => 'required|max:20',
            'EMAIL' => 'required|email|max:100',
            'NASCIONAL' => 'required|max:30',
            'NATURAD' => 'required|max:30',
            'RGD' => 'required|max:30',
            'CNH' => 'required|max:30',
            'PAI' => 'required|max:50',
            'MAE' => 'required|max:50',
            'ATIVIDADE' => 'required|max:50',
            'TRABALHO' => 'required|max:50',
            'TRAENDERECO' => 'required|max:50',
            'TRAFONE' => 'required|max:20',
            'TRAEMAIL' => 'required|email|max:50',
            'TRAATIVIDADE' => 'required|max:50',
            'SOCIONOME1' => 'required|max:50',
            'SOCIONOME2' => 'required|max:50',
            'CNPJ1' => 'required|max:50',
            'CNPJ2' => 'required|max:50',
            'PART1' => 'required|numeric',
            'PART2' => 'required|numeric',
            'IENDERECO1' => 'required|max:50',
            'IENDERECO2' => 'required|max:50',
            'IENDERECO3' => 'required|max:50',
            'MATRICULA1' => 'required|max:20',
            'MATRICULA2' => 'required|max:20',
            'MATRICULA3' => 'required|max:20',
            'REGISTRO1' => 'required|max:20',
            'REGISTRO2' => 'required|max:20',
            'REGISTRO3' => 'required|max:20',
            'CARRO1' => 'required|max:30',
            'CARRO2' => 'required|max:30',
            'ANOMOD1' => 'required|max:20',
            'ANOMOD2' => 'required|max:20',
            'PLACA1' => 'required|max:20',
            'PLACA2' => 'required|max:20',
            // Adicione outras regras conforme necessário
        ]);

        // Crie um novo objeto Psocios e atribua os valores do formulário
        $psocio = new Psocios($request->all());

      //  dd($psocio);

        // Salve o objeto no banco de dados
        $psocio->save();

        return redirect()->route('dashboard')->with('success', 'Dados do sócio inseridos com sucesso!');
    }
}
