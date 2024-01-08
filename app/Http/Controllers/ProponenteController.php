<?php

namespace App\Http\Controllers;
use App\Models\Proponente;
use Illuminate\View\View;

use Illuminate\Http\Request;

class ProponenteController extends Controller
{
    public function index(): View{
        return view('proponente.index');
    }

    public function store(Request $request){
       // dd($request->all());
        $proponente= new Proponente($request->all());

       // dd($proponente);

        $proponente->save();

        return redirect()->route('dashboard')->with('success', 'Dados do sócio inseridos com sucesso!');
    }

}
