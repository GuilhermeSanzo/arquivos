<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {
        $nome = "Guilherme";
        $idade = 27;

        $arr = [10,20,30,40,50];

        $nomes = ['Guilherme', 'Lucas', 'João', 'Maria'];

        return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }

}
