@extends('layouts.main')
@section('title', 'Produto')
@section('content')
@if($id !=null)
    <p>Exibindo produto ID: {{ $id }}</p>
@else
<p>Exibindo produto ID: 0 </p>
@endif


@endsection