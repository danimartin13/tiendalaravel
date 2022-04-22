@extends('menu')

@section('titulo')
    home
@endsection

@section('content')

<h1>registrarse</h1>


<form action="{{route('compregis')}}" method="post">
    @csrf
    <input type="text" name="nombre" id="">
    <input type="password" name="password" id="">
    <input type="submit" value="Enviar">
</form>
    <a href="{{route('iniciosesion')}}">Inicia sesion</a>
@endsection