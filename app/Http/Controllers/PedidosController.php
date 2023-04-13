<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d['Pedidos'] = Pedidos::paginate(5);
        return view('Pedidos.index',$d);
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
        Pedidos::insert($datos);
        return response()->json($datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedidos $pedidos)
    {
        return view('Productos.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedidos=Pedidos::findOrFail($id);
        return view('Pedidos.edit', compact('pedidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except('_token','_method');
        Pedidos::where('id_pedido','=', $id)->update($datos);

        $pedidos=Pedidos::findOrFail($id);
        return view('Pedidos.edit', compact('pedidos'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pedidos::destroy($id);
        return redirect('Pedidos');
    }
}
