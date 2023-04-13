<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/app.css">
    <title>Pedidos</title>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inicio Pedidos</h1>

    <table>
        <thead>
            <tr>Id Pedido</tr>
            <tr>Id Producto</tr>
            <tr>Cantidad</tr>
            <tr>Precio Unitario</tr>
            <tr>Precio Total</tr>
            <tr>Estatus</tr>
        </thead>
        <tbody>
            @foreach($Pedidos as $Pedido)
            <tr>
                <td>{{ $Pedido->id_pedido}}</td>
                <td>{{ $Pedido->id_producto}}</td>
                <td>{{ $Pedido->cantidad }}</td>
                <td>{{ $Pedido->precio }}</td>
                <td>{{ $Pedido->precio_total }}</td>
                <td>{{ $Pedido->id_estatus }}</td>
                <td><a href="{{url('/Pedidos/'.$Pedido->id.'/edit')}}">Editar</a> | 
                    <form action="{{url('/Pedidos/'.$Pedido->id)}}" method="post">
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