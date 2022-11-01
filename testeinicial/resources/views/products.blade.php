@extends('layouts.main')
@section('title', 'Produtos')
@section('content')

<h1>Tela de produtos</h1>
<a href="/">Voltar a Home</a>

@if($busca != '')
<p>O Usuário está buscando por: {{ $busca }}</p>
@endif
@endsection