<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use App\Models\Menor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class CuidadorController extends Controller
{
    public function index()
    {
        $cuidadores = Cuidador::orderBy('id', 'desc')->paginate();
        $context = [
            'cuidadores' => $cuidadores,
        ];
        return view('cuidadores.index', $context);
    }

    public function create()
    {
        return view('cuidadores.create');
    }

    public function store(Request $request)
    {
        // Crear instancia
        $cuidador = new Cuidador();
        $cuidador->nombres = $request->nombres;
        $cuidador->apellidos = $request->apellidos;
        $cuidador->identificacion = $request->identificacion;
        $cuidador->telefono = $request->telefono;
        $cuidador->save();

        return redirect()->route('cuidadores.show', $cuidador);
    }

    public function show(Cuidador $cuidador)
    {
        $context = [
            'cuidador' => $cuidador,
        ];
        return view('cuidadores.show', $context);
    }

    public function edit(Cuidador $cuidador)
    {
        return view('cuidadores.edit', compact('cuidador'));
    }

    public function update(Request $request, Cuidador $cuidador)
    {
        // Actualizar instancia
        $cuidador->nombres = $request->nombres;
        $cuidador->apellidos = $request->apellidos;
        $cuidador->identificacion = $request->identificacion;
        $cuidador->telefono = $request->telefono;
        $cuidador->save();

        return redirect()->route('cuidadores.show', $cuidador);
    }

    public function destroy(Cuidador $cuidador)
    {
        $cuidador->delete();
        return redirect()->route('cuidadores.index');
    }

    public function search(Request $request)
    {
        $identificacion = $request->buscar;
        $cuidador = Cuidador::where('identificacion',$identificacion)->first();
        if ($cuidador){
            $context = [
                'cuidador' => $cuidador,
            ];
            return view('cuidadores.show', $context);
        }
        $menor = Menor::where('registro_civil',$identificacion)->first();
        if ($menor)
        {
            $cuidador = $menor->alergia->cuidador;
            $context = [
                'cuidador' => $cuidador,
            ];
            return view('cuidadores.show', $context);
        }
        return view('cuidadores.not_found');
    }

    public function not_found()
    {
        return view('cuidadores.not_found');
    }

    public function exportPdf()
    {
        $cuidadores = Cuidador::all();
        $context = [
            'cuidadores' => $cuidadores,
        ];
        $pdf = PDF::loadView('cuidadores.pdf', $context);
        return $pdf->download('cuidador-list-pdf.pdf');
    }
}
