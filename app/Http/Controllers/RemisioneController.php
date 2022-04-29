<?php

namespace App\Http\Controllers;

use App\Models\Remisione;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

/**
 * Class RemisioneController
 * @package App\Http\Controllers
 */
class RemisioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remisiones = Remisione::paginate();

        return view('remisione.index', compact('remisiones'))
            ->with('i', (request()->input('page', 1) - 1) * $remisiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //prueba 1
        $remisione = new Remisione();
        $clientes = Cliente::pluck('tipoDoc','id','nombre1','nombre2','apellido1','apellido2','nombreLegal','direccion','ciudad','celular','correo');
        $productos = Producto::pluck('item','id','nombre','precio');
        return view('remisione.create', compact('remisione','clientes','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Remisione::$rules);

        $remisione = Remisione::create($request->all());

        return redirect()->route('remisiones.index')
            ->with('success', 'Remisione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remisione = Remisione::find($id);
        
        return view('remisione.show', compact('remisione'));
    }

        /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function createPDF(){
        //Recuperar todos los productos de la db

        $remisione = Remisione::find($id);
        view()->share('remisiones', $remisione);
        $pdf = PDF::loadView('show', $remisione);
        return $pdf->download('remisione.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $remisione = Remisione::find($id);
        $clientes = Cliente::pluck('tipoDoc','id','nombre1','nombre2','apellido1','apellido2','nombreLegal','direccion','ciudad','celular','correo');
        $productos = Producto::pluck('item','id','nombre','precio');
        return view('remisione.edit', compact('remisione','clientes','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Remisione $remisione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remisione $remisione)
    {
        request()->validate(Remisione::$rules);

        $remisione->update($request->all());

        return redirect()->route('remisiones.index')
            ->with('success', 'Remisione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $remisione = Remisione::find($id)->delete();

        return redirect()->route('remisiones.index')
            ->with('success', 'Remisione deleted successfully');
    }
    
}
