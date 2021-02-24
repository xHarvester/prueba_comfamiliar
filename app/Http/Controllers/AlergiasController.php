<?php

namespace App\Http\Controllers;

use App\Models\Alergias;
use App\Models\Cuidador;
use Illuminate\Http\Request;

class AlergiasController extends Controller
{
    public function index()
    {
        $alergias = Alergias::orderBy('id', 'desc')->paginate();
        $context = [
            'alergias' => $alergias,
        ];
        return view('alergias.index', $context);
    }

    public function create()
    {
        $cuidadores = Cuidador::all();
        $context = [
            'cuidadores' => $cuidadores,
        ];
        return view('alergias.create', $context);
    }

    public function store(Request $request)
    {
        // Crear instancia
        $alergia = new Alergias();
        $alergia->nombre = $request->nombre;
        $alergia->cuidados = $request->cuidados;
        $alergia->cuidador_id = $request->cuidador_id;
        $alergia->save();

        return redirect()->route('alergias.show', $alergia);
    }

    public function show(Alergias $alergia)
    {
        $context = [
            'alergia' => $alergia,
        ];
        return view('alergias.show', $context);
    }

    public function edit(Alergias $alergia)
    {
        $cuidadores = Cuidador::all();
        $context = [
            'cuidadores' => $cuidadores,
            'alergia' => $alergia,
        ];
        return view('alergias.edit', $context);
    }

    public function update(Request $request, Alergias $alergia)
    {
        // Actualizar instancia
        $alergia->nombre = $request->nombre;
        $alergia->cuidados = $request->cuidados;
        $alergia->cuidador_id = $request->cuidador_id;
        $alergia->save();

        return redirect()->route('alergias.show', $alergia);
    }

    public function destroy(Alergias $alergia)
    {
        $alergia->delete();
        return redirect()->route('alergias.index');
    }
}
