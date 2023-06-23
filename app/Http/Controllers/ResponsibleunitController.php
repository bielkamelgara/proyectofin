<?php

namespace App\Http\Controllers;

use App\Models\Responsibleunit;
use Illuminate\Http\Request;

/**
 * Class ResponsibleunitController
 * @package App\Http\Controllers
 */
class ResponsibleunitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsibleunits = Responsibleunit::paginate();

        return view('responsibleunit.index', compact('responsibleunits'))
            ->with('i', (request()->input('page', 1) - 1) * $responsibleunits->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsibleunit = new Responsibleunit();
        return view('responsibleunit.create', compact('responsibleunit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Responsibleunit::$rules);

        $responsibleunit = Responsibleunit::create($request->all());

        return redirect()->route('responsibleunits.index')
            ->with('success', 'Responsable de unidad creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $responsibleunit = Responsibleunit::find($id);

        return view('responsibleunit.show', compact('responsibleunit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsibleunit = Responsibleunit::find($id);

        return view('responsibleunit.edit', compact('responsibleunit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Responsibleunit $responsibleunit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responsibleunit $responsibleunit)
    {
        request()->validate(Responsibleunit::$rules);

        $responsibleunit->update($request->all());

        return redirect()->route('responsibleunits.index')
            ->with('success', 'Responsable de unidad actualizado con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $responsibleunit = Responsibleunit::find($id)->delete();

        return redirect()->route('responsibleunits.index')
            ->with('success', 'Responsable de unidad eliminado con exito');
    }
}
