<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Creación de Pedidos</h1>

    <form action="{{url('/Pedidos')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="id_producto">Id Producto</label>
        <input type="text" name="id_producto" id="id_producto">
        <br>
        <br>
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad">
        <br>
        <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio">
        <br>
        <br>
        <label for="precio_total">Precio Total</label>
        <input type="text" name="precio_total" id="precio_total">
        <br>
        <br>
        <label for="id_estatus">Id Estatus</label>
        <input type="text" name="id_estatus" id="id_estatus">
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>

</div>
@endsection
</body>
</html>