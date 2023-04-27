<?php

namespace App\Http\Controllers;

use App\Models\QuestnAnsw;
use Illuminate\Http\Request;

/**
 * Class QuestnAnswController
 * @package App\Http\Controllers
 */
class QuestnAnswController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questnAnsws = QuestnAnsw::paginate();

        return view('questn-answ.index', compact('questnAnsws'))
            ->with('i', (request()->input('page', 1) - 1) * $questnAnsws->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questnAnsw = new QuestnAnsw();
        return view('questn-answ.create', compact('questnAnsw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(QuestnAnsw::$rules);

        $questnAnsw = QuestnAnsw::create($request->all());

        return redirect()->route('questn-answs.index')
            ->with('success', 'QuestnAnsw created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questnAnsw = QuestnAnsw::find($id);

        return view('questn-answ.show', compact('questnAnsw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questnAnsw = QuestnAnsw::find($id);

        return view('questn-answ.edit', compact('questnAnsw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  QuestnAnsw $questnAnsw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestnAnsw $questnAnsw)
    {
        request()->validate(QuestnAnsw::$rules);

        $questnAnsw->update($request->all());

        return redirect()->route('questn-answs.index')
            ->with('success', 'QuestnAnsw updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $questnAnsw = QuestnAnsw::find($id)->delete();

        return redirect()->route('questn-answs.index')
            ->with('success', 'QuestnAnsw deleted successfully');
    }
}
