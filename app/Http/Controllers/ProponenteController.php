<?php

namespace App\Http\Controllers;
use App\Models\Proponente;

use Illuminate\Http\Request;

class ProponenteController extends Controller
{
    function index(){
        $proponente = new Proponente();

        dd($proponente->first());
    }
}
