<?php

namespace App\Http\Controllers;

use App\Models\DetailStp;
use App\Models\Lhu;
use App\Models\Permohonan;
use Illuminate\Http\Request;

class LhuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $detailStp = DetailStp::whereStpId($permohonan->stp->id)->first();
        $lhu = Lhu::whereDetailStpId($detailStp->id)->get();
        return view('admin.lhu.index', compact('permohonan', 'lhu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $permohonan = Permohonan::findOrFail($id);

        return view('admin.lhu.create', compact('permohonan'));

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

        $data = Lhu::create($input);
        $permohonan_id = $data->detail_stp->stp->permohonan_id;

        return redirect()->route('admin.lhu.index', $permohonan_id)->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lhu  $lhu
     * @return \Illuminate\Http\Response
     */
    public function show(Lhu $lhu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lhu  $lhu
     * @return \Illuminate\Http\Response
     */
    public function edit(Lhu $lhu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lhu  $lhu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lhu $lhu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lhu  $lhu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lhu = Lhu::findOrFail($id);
        try {
            $lhu->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withErrors('Data gagal dihapus');

            }
        }

    }
}
