<?php

namespace App\Http\Controllers;

use App\Models\DetailJenisPengujian;
use App\Models\Jenis;
use App\Models\JenisPengujian;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DetailJenisPengujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $jenis_pengujian = JenisPengujian::findOrFail($id);
        return view('admin.jenis-pengujian-detail.index', compact('jenis_pengujian'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $jenis_pengujian = JenisPengujian::findOrFail($id);
        return view('admin.jenis-pengujian-detail.create', compact('jenis_pengujian'));
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

        DetailJenisPengujian::create($input);

        return redirect()->route('admin.jenis-pengujian-detail.index', $request->jenis_pengujian_id)->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailJenisPengujian  $detail_jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function show(DetailJenisPengujian $detail_jenis_pengujian)
    {
        return view('admin.jenis-pengujian.show', compact('detail_jenis_pengujian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailJenisPengujian  $detail_jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailJenisPengujian $detail_jenis_pengujian)
    {
        $jenisSample = Jenis::all();

        return view('admin.jenis-pengujian.edit', compact('jenisSample'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailJenisPengujian  $detail_jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailJenisPengujian $detail_jenis_pengujian)
    {
        $input = $request->all();

        $detail_jenis_pengujian->update($input);

        return redirect()->route('admin.jenis-pengujian.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailJenisPengujian  $detail_jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailJenisPengujian $detail_jenis_pengujian)
    {

        try {
            $detail_jenis_pengujian->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
