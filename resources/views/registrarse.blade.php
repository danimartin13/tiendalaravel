@extends('menu')

@section('titulo')
    home
@endsection

@section('content')

<h1>registrarse</h1>


<form action="" method="post">
    <input type="text" name="" id="">
    <input type="password" name="" id="">
    <input type="submit" value="Enviar">
</form>
    <a href="{{route('iniciosesion')}}">Inicia sesion</a>
@endsection