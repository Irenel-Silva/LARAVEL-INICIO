<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
        $nome= "Alexandre";
        $nomes=['Albano','Teresa', 'Helena', 'Isabel', 'Antonia', 'joão', 'Emanuel', 'Natalicio'];
        return view('welcome', ['nome'=>$nome, 'nomes'=>$nomes]);
    }

    public function create(){
        return view('events.create');
    }
    public function contactos(){
        return view('contact');
    }
}
