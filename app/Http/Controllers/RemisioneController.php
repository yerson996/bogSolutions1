<?php

namespace App\Http\Controllers;

use App\Models\Remisione;
use Illuminate\Http\Request;

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
        $remisione = new Remisione();
        return view('remisione.create', compact('remisione'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $remisione = Remisione::find($id);

        return view('remisione.edit', compact('remisione'));
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
