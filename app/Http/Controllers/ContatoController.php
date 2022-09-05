<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index () {

        $contatos = [
            (object)["nome"=>"Maria", "telefone"=>"12345678"],
            (object)["nome"=>"Joao", "telefone"=>"87654321"]
        ];

        $contato = new Contato();
        $cont = $contato->lista();
        dd($cont->telefone);

        return view('contato.index', compact('contatos'));
    }
    public function criar (Request $req): string
    {
        dd($req->all());
        return "Esse é o criar do ContatoController";
    }
    public function editar (): string
    {
        return "Esse é o editar do ContatoController";
    }
}
