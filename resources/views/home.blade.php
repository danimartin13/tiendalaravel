@extends('menu')

@section('titulo')
    home
@endsection

@section('content')
<div class="subheader">
    @foreach ($categorias as $categoria)

    <a href="#">{{$categoria->nombre}}</a>

    @endforeach
</div>

<div class="productoshome">
    @foreach ($productos as $producto)    
    <div class="claseproducto">
        <p>{{$producto->nombre}}</p>
    </div>
    @endforeach
</div>

@endsection