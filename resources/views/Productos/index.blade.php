<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/app.css">
    <title>Productos</title>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inicio Productos</h1>

    <table>
        <thead>
            <tr>#</tr>
            <tr>Nombre</tr>
            <tr>Descripcion</tr>
            <tr>Foto</tr>
            <tr>Precio Unitario</tr>
            <tr>Stock</tr>
        </thead>
        <tbody>
            @foreach($Productos as $Producto)
            <tr>
                <td>{{ $Producto->id_producto}}</td>
                <td>{{ $Producto->nombre_producto }}</td>
                <td>{{ $Producto->descripcion }}</td>
                <td>{{ $Producto->foto }}</td>
                <td>{{ $Producto->precio }}</td>
                <td>{{ $Producto->stock }}</td>
                <td><a href="{{url('/Productos/'.$Producto->id_producto.'/edit')}}">Editar</a> | 
                    <form action="{{url('/Productos/'.$Producto->id_producto)}}" method="post">
                        @csrf {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>