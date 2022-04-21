@extends('menu')

@section('content')
    <div class="productoshome">
        @foreach ($productos as $producto)    
        <div class="claseproducto">
            <img class="homeimagenproductos" src="fotos/{{$producto->id}}/{{$producto->foto}}" alt="">
            <h2>{{$producto->nombre}}</h2>
            <h5>{{$producto->descripcion}}</h5>
            <h6>{{$producto->precio}} €</h6>
            <div class="unidades">
                <h6>Queda</h6>
                {{$producto->stock}}
                <h6>Unidades</h6>
            </div>
        </div>
        @endforeach
    </div>
@endsection