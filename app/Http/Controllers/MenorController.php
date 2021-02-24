<?php

namespace App\Http\Controllers;

use App\Models\Alergias;
use App\Models\Acudiente;
use App\Models\Menor;
use Illuminate\Http\Request;

class MenorController extends Controller
{
    public function index()
    {
        $menores = Menor::orderBy('id', 'desc')->paginate();
        $context = [
            'menores' => $menores,
        ];
        return view('menores.index', $context);
    }

    public function create()
    {
        $alergias = Alergias::all();
        $acudientes = Acudiente::all();
        $context = [
            'alergias' => $alergias,
            'acudientes' => $acudientes,
        ];
        return view('menores.create', $context);
    }

    public function store(Request $request)
    {
        // Crear instancia
        $menor = new Menor();
        $menor->nombres = $request->nombres;
        $menor->apellidos = $request->apellidos;
        $menor->registro_civil = $request->registro_civil;
        $menor->fecha_nacimiento = $request->fecha_nacimiento;
        $menor->ciudad = $request->ciudad;
        $menor->direccion = $request->direccion;
        $menor->alergia_id = $request->alergia_id;
        $menor->acudiente_id = $request->acudiente_id;
        $menor->save();

        return redirect()->route('menores.show', $menor);
    }

    public function show(Menor $menor)
    {
        $context = [
            'menor' => $menor,
        ];
        return view('menores.show', $context);
    }

    public function edit(Menor $menor)
    {
        $alergias = Alergias::all();
        $acudientes = Acudiente::all();
        $context = [
            'alergias' => $alergias,
            'acudientes' => $acudientes,
            'menor' => $menor,
        ];
        return view('menores.edit', $context);
    }

    public function update(Request $request, Menor $menor)
    {
        // Actualizar instancia
        $menor->nombres = $request->nombres;
        $menor->apellidos = $request->apellidos;
        $menor->registro_civil = $request->registro_civil;
        $menor->ciudad = $request->ciudad;
        $menor->direccion = $request->direccion;
        $menor->alergia_id = $request->alergia_id;
        $menor->acudiente_id = $request->acudiente_id;
        $menor->save();

        return redirect()->route('menores.show', $menor);
    }

    public function destroy(Menor $menor)
    {
        $menor->delete();
        return redirect()->route('menores.index');
    }
}
