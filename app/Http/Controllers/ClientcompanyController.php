<?php

namespace App\Http\Controllers;

use App\Models\Clientcompany;
use Illuminate\Http\Request;

/**
 * Class ClientcompanyController
 * @package App\Http\Controllers
 */
class ClientcompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientcompanies = Clientcompany::paginate();

        return view('clientcompany.index', compact('clientcompanies'))
            ->with('i', (request()->input('page', 1) - 1) * $clientcompanies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientcompany = new Clientcompany();
        return view('clientcompany.create', compact('clientcompany'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clientcompany::$rules);

        $clientcompany = Clientcompany::create($request->all());

        return redirect()->route('clientcompanies.index')
            ->with('success', 'Compañia cliente creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientcompany = Clientcompany::find($id);

        return view('clientcompany.show', compact('clientcompany'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientcompany = Clientcompany::find($id);

        return view('clientcompany.edit', compact('clientcompany'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clientcompany $clientcompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientcompany $clientcompany)
    {
        request()->validate(Clientcompany::$rules);

        $clientcompany->update($request->all());

        return redirect()->route('clientcompanies.index')
            ->with('success', 'Compañia cliente actualizado con  exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clientcompany = Clientcompany::find($id)->delete();

        return redirect()->route('clientcompanies.index')
            ->with('success', 'Compañia cliente eliminado con exito');
    }
}
