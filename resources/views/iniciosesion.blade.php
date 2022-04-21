@extends('menu')

@section('titulo')
    home
@endsection

@section('content')

<h1>Inicio sesion</h1>



<form action="" method="post">
    <input type="text" name="" id="">
    <input type="password" name="" id="">
    <input type="submit" value="Enviar">
</form>
    <a href="{{route('registrarse')}}">Registrarse</a>
@endsection