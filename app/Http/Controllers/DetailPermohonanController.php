<?php

namespace App\Http\Controllers;

use App\Models\DetailJenisPengujian;
use App\Models\DetailPermohonan;
use App\Models\JenisPengujian;
use App\Models\Permohonan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DetailPermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $permohonan = Permohonan::findOrFail($id);

        return view('pemohon.permohonan-detail.index', compact('permohonan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $jenisPengujian = JenisPengujian::findOrFail($permohonan->jenis_pengujian_id);
        return view('pemohon.permohonan-detail.create', compact('permohonan', 'jenisPengujian'));
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
        $harga = DetailJenisPengujian::findOrFail($request->detail_jenis_pengujian_id);
        $input['harga'] = $harga->harga;

        DetailPermohonan::create($input);

        return redirect()->route('pemohon.permohonan-detail.index', $request->permohonan_id)->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailPermohonan  $detailPermohonan
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPermohonan $detailPermohonan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailPermohonan  $detailPermohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPermohonan $detailPermohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailPermohonan  $detailPermohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPermohonan $detailPermohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailPermohonan  $detailPermohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailPermohonan = DetailPermohonan::findOrFail($id);
        try {
            $detailPermohonan->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withErrors('Data gagal dihapus');

            }
        }
    }
}
