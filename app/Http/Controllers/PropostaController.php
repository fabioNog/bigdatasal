<?php

namespace App\Http\Controllers;
use App\Models\Proposta;
use Illuminate\View\View;

use Illuminate\Http\Request;

class PropostaController extends Controller
{
    public function index(): View{
        return view('propoposta.index');
    }

    public function store(Request $request){
        dd($request);
    }

}
