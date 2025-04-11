<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = Pais::all();
        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = DB::table('tb_pais')
        ->orderBy('pais_capi')
        ->get();
        return view('pais.new', ['paises' => $paises]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = new pais();
        $pais->pais_codi = $request->id;
        $pais->pais_nomb = $request->name;
        $pais->pais_capi = $request->code;
        $pais->save();
    
        return redirect()->route('paises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pais = pais::findOrFail($id); // busca solo uno
        $todosLosPaises = pais::all(); // para llenar el <select>
    
        return view('pais.edit', [
            'pais' => $pais,
            'paises' => $todosLosPaises
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pais = pais::findOrFail($id); // busca el país existente
        $pais->pais_nomb = $request->name;
        $pais->pais_capi = $request->code;
        $pais->save();
    
        return redirect()->route('paises.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paises = pais::find($id);
        $paises->delete();

        return redirect()->route('paises.index');
    }
}
