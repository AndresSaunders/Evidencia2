<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Productos</h1>

    <form action="{{url('/Productos')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre_producto">Nombre</label>
        <input type="text" name="nombre_producto" value="{{$productos->nombre_producto}}" id="nombre_producto">
        <br>
        <br>
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" value="{{$productos->descripcion}}"id="descripcion">
        <br>
        <br>
        <label for="foto">Foto</label>
        <input type="text" name="foto" value="{{$productos->foto}}" id="foto">
        <br>
        <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" value="{{$productos->precio}}" id="precio">
        <br>
        <br>
        <label for="stock">Stock</label>
        <input type="text" name="stock" value="{{$productos->stock}}" id="stock">
        <br>
        <br>
        <input type="submit" value="Guardar datos">
    </form>

</div>
@endsection
</body>
</html>