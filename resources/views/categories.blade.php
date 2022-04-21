@extends('inicio')

@section('titulo')
    categories
@endsection

@section('content')
<div class="general">
    <div class="mediapa">
        <h1>categories</h1>
    <button type="button" class="btn btn-primary">Añadir categoria</button>
    <table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>bloquear</td>
            <td>eliminar</td>
        </tr>
        @foreach ($categorias as $categoria)
        <tr>
            <form action="{{route('eliminarcategoria',$categoria)}}" method="post">
                @csrf @method('DELETE')
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td>bloquear</td>
                <td><input type="submit" value="Eliminar"></td>
            </form>
        </tr>

        
        @endforeach
    </table>
    </div>
    <div class="mediapa">
        <form action="{{route('anadircategoria')}}" method="post">
            @csrf
            <label for="">Nombre de la categoria</label><br>
            <input type="text" name="nombre" id="">
            <input type="submit" value="Enviar">
        </form>
    </div>
    
    
</div>
@endsection