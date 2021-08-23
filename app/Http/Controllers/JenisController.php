<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jenis::all();
        return view('admin.jenis.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Jenis::create($input);

        return redirect()->route('admin.jenis.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis  $jeni
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jeni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis  $jeni
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jeni)
    {

        return view('admin.jenis.edit', compact('jeni'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis  $jeni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jeni)
    {
        $input = $request->all();

        $jeni->update($input);

        return redirect()->route('admin.jenis.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis  $jeni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jeni)
    {

        try {
            $jeni->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withErrors('Data gagal dihapus');

            }
        }

    }
}
