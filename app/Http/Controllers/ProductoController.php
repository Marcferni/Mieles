<?php

namespace App\Http\Controllers;

Use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lista = Producto::all();
        return view('producto.index')->with('lista', $lista); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'floating_nombre' => ['required'],
            'floating_descripcion' => ['required'],
            'floating_imagen' => ['required', 'image'],
        ]);

        $producto = new Producto();
        $producto->nombre = $request->floating_nombre;
        $producto->descripcion = $request->floating_descripcion;
        $producto->imagen = $request->file('floating_imagen')->store('productos', 'public');
        $producto->timestamps = false;
        $producto->saveorfail();
        return redirect()->route('producto.show', $producto->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $objeto = Producto::select('*')->where('id', $id)->get();
        return view('producto.show')->with('objeto', $objeto); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cosa = Producto::select('*')->where('id', $id)->get();
        return view('producto.edit')->with('cosa', $cosa); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'floating_nombre' => ['required'],
            'floating_descripcion' => ['required'],
            'floating_imagen' => ['required', 'imagen'],
        ]);

        $articulo = Producto::findorfail($id);
        $articulo->nombre = $request->floating_nombre;
        $articulo->descripcion = $request->floating_descripcion;
        $articulo->imagen = $request->file('floating_imagen')->store('productos', 'public');
        $articulo->timestamps = false;
        $articulo->saveorfail();
        return redirect()->route('producto.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $excedente = Producto::findorfail($id);
        //Storage::disk('public')->delete($excedente->imagen);
        $excedente->delete();
        return redirect()->route('producto.index');
    }
}
