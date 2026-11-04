<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Facades\DB;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mypickups = Reserva::with('User')->get();
        return view('reserva.index')->with('reservas',$mypickups);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reserva.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservaN = new Reserva();
        $reservaN->fecha = $request->fecha;
        $reservaN->direccion = $request->direccion;
        $reservaN->id_user = 1;
        $id_producto = 1;
        $reservaN->saveOrFail();
         $reservaN->Producto()->attach($id_producto);
        return redirect()->route('reserva.index'); 
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $cards =  Reserva::with('Producto')->findorfail($id);
          return view('reserva.show')->with('cards',$cards);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resevaB = Reserva::findorFail($id);
        $resevaB->Producto()->detach();
        $resevaB->delete();
        return redirect()->route('reserva.index');   
    }
}
