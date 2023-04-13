<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d['Productos'] = Productos::paginate(5);
        return view('Productos.index',$d);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        Productos::insert($datos);
        return response()->json($datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto)
    {
        return view('Productos.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productos = Productos::findOrFail($id);
        return view('Productos.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except('_token','_method');
        Productos::where('id_producto','=', $id)->update($datos);

        $productos = Productos::findOrFail($id);
        return view('Productos.edit', compact('productos'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Productos::destroy($id);
        return redirect('Productos');
    }
}
