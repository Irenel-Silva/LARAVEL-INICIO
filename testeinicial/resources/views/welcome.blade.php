@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
<h1>Algum Título</h1> 
<img src="/img/banner.jpg" alt="Banner">
@if(10>25)
    <p>A condição é true</p>
@endif

<p>{{ $nome }}</p>
@if($nome=="Albor")
    <p>O Nome é Albor</p>
@elseif($nome=="Alexandre")
    <p>O Nome é {{ $nome }}</p>
@else
    <p>O nome não é Alex</p>            
 @endif

@php
$name= 'Adorado';
echo $name;
@endphp
{{-- Este é o comentário do blade --}}
@foreach ($nomes as $no) 
<p>{{ $loop->index }}</p>
<p> {{ $no }}</p>
@endforeach
@endsection