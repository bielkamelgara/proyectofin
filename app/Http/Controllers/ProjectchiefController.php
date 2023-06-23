<?php

namespace App\Http\Controllers;

use App\Models\Projectchief;
use Illuminate\Http\Request;

/**
 * Class ProjectchiefController
 * @package App\Http\Controllers
 */
class ProjectchiefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectchiefs = Projectchief::paginate();

        return view('projectchief.index', compact('projectchiefs'))
            ->with('i', (request()->input('page', 1) - 1) * $projectchiefs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projectchief = new Projectchief();
        return view('projectchief.create', compact('projectchief'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Projectchief::$rules);

        $projectchief = Projectchief::create($request->all());

        return redirect()->route('projectchiefs.index')
            ->with('success', 'Jefe de eproyecto creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projectchief = Projectchief::find($id);

        return view('projectchief.show', compact('projectchief'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectchief = Projectchief::find($id);

        return view('projectchief.edit', compact('projectchief'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Projectchief $projectchief
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projectchief $projectchief)
    {
        request()->validate(Projectchief::$rules);

        $projectchief->update($request->all());

        return redirect()->route('projectchiefs.index')
            ->with('success', 'Jefe de proyecto actualizado con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $projectchief = Projectchief::find($id)->delete();

        return redirect()->route('projectchiefs.index')
            ->with('success', 'Jefe de proyecto eliminado con exito');
    }
}
