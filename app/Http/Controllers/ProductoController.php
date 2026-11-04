<?php

namespace App\Http\Controllers;

Use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lista = Producto::all();
        return view('Producto.index')->with('lista', $lista); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto = new Producto();
        $producto->nombre = $request->floating_nombre;
        $producto->descripcion = $request->floating_descripcion;
        $producto->imagen = $request->floating_imagen;
        $producto->timestamps = false;
        $producto->saveorfail();
        return redirect()->route('Producto.show', $producto->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $objeto = Producto::select('*')->where('id', $id)->get();
        return view('Producto.show')->with('objeto', $objeto); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cosa = Producto::select('*')->where('id', $id)->get();
        return view('Producto.edit')->with('cosa', $cosa); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $articulo = Producto::findorfail($id);
        $articulo->nombre = $request->floating_nombre;
        $articulo->descripcion = $request->floating_descripcion;
        $articulo->imagen = $request->floating_imagen;
        $articulo->timestamps = false;
        $articulo->saveorfail();
        return redirect()->route('Producto.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $excedente = Producto::findorfail($id);
        $excedente->delete();
        return redirect()->route('Producto.index');
    }
}
