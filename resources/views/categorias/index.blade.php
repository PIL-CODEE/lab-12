@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorias</h1>
    <a href="{{route('categorias.create')}}" class="bts bts-primaty">Nueva Categoria</a>
    <ul>
        @foreach ($categorias as $categoria)
        <li>
            <a href="{{route('categorias.edit', $categoria)}}">{{$categoria->nombre}}</a>
            <form action="{{route('categorias.delete', $categoria)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection