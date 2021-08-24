<?php

namespace App\Http\Controllers;

use App\Models\DetailStp;
use App\Models\Lhus;
use App\Models\Permohonan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class LhusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $detailStp = DetailStp::whereStpId($permohonan->stp->id)->pluck('id');
        $lhus = Lhus::whereIn('detail_stp_id', $detailStp)->get();

        return view('admin.lhus.index', compact('permohonan', 'lhus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $permohonan = Permohonan::findOrFail($id);

        return view('admin.lhus.create', compact('permohonan'));

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

        $data = Lhus::create($input);
        $permohonan_id = $data->detail_stp->stp->permohonan_id;

        return redirect()->route('admin.lhus.index', $permohonan_id)->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lhus  $lhus
     * @return \Illuminate\Http\Response
     */
    public function show(Lhus $lhus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lhus  $lhus
     * @return \Illuminate\Http\Response
     */
    public function edit(Lhus $lhus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lhus  $lhus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lhus $lhus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lhus  $lhus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lhus = Lhus::findOrFail($id);
        try {
            $lhus->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withErrors('Data gagal dihapus');

            }
        }

    }
}
