<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function index(){
        /*$nome= "Alexandre";
        $nomes=['Albano','Teresa', 'Helena', 'Isabel', 'Antonia', 'joão', 'Emanuel', 'Natalicio'];
        return view('welcome', ['nome'=>$nome, 'nomes'=>$nomes]);*/
        $events=Event::all();
        return view('welcome', ['events'=>$events]);
    }

    public function create(){
        return view('events.create');
    }
    public function contactos(){
        return view('contact');
    }
    public function store(Request $request){
        $event= new Event;
        $event->title= $request->title;
        $event->city= $request->city;
        $event->private= $request->private;
        $event->description= $request->description;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com Sucesso!');


    }

}
