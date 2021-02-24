<?php

namespace App\Http\Controllers;
use App\Models\Acudiente;

use Illuminate\Http\Request;

class AcudienteController extends Controller
{
    public function index()
    {
        $acudientes = Acudiente::orderBy('id', 'desc')->paginate();
        $context = [
            'acudientes' => $acudientes,
        ];
        return view('acudientes.index', $context);
    }

    public function create()
    {
        return view('acudientes.create');
    }

    public function store(Request $request)
    {
        // Crear instancia
        $acudiente = new Acudiente();
        $acudiente->nombres = $request->nombres;
        $acudiente->apellidos = $request->apellidos;
        $acudiente->identificacion = $request->identificacion;
        $acudiente->telefono = $request->telefono;
        $acudiente->ciudad = $request->ciudad;
        $acudiente->direccion = $request->direccion;
        $acudiente->parentesco = $request->parentesco;
        $acudiente->save();

        return redirect()->route('acudientes.show', $acudiente);
    }

    public function show(Acudiente $acudiente)
    {
        $context = [
            'acudiente' => $acudiente,
        ];
        return view('acudientes.show', $context);
    }

    public function edit(Acudiente $acudiente)
    {
        return view('acudientes.edit', compact('acudiente'));
    }

    public function update(Request $request, Acudiente $acudiente)
    {
        // Actualizar instancia
        $acudiente->nombres = $request->nombres;
        $acudiente->apellidos = $request->apellidos;
        $acudiente->identificacion = $request->identificacion;
        $acudiente->telefono = $request->telefono;
        $acudiente->ciudad = $request->ciudad;
        $acudiente->direccion = $request->direccion;
        $acudiente->parentesco = $request->parentesco;
        $acudiente->save();

        return redirect()->route('acudientes.show', $acudiente);
    }

    public function destroy(Acudiente $acudiente)
    {
        $acudiente->delete();
        return redirect()->route('acudientes.index');
    }
}
