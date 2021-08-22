<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\JenisPengujian;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class JenisPengujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = JenisPengujian::all();
        return view('admin.jenis-pengujian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisSample = Jenis::all();
        return view('admin.jenis-pengujian.create', compact('jenisSample'));
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

        JenisPengujian::create($input);

        return redirect()->route('admin.jenis-pengujian.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisPengujian  $jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function show(JenisPengujian $jenis_pengujian)
    {
        return view('admin.jenis-pengujian.show', compact('jenis_pengujian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisPengujian  $jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisPengujian $jenis_pengujian)
    {
        $jenisSample = Jenis::all();

        return view('admin.jenis-pengujian.edit', compact('jenisSample'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisPengujian  $jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisPengujian $jenis_pengujian)
    {
        $input = $request->all();

        $jenis_pengujian->update($input);

        return redirect()->route('admin.jenis-pengujian.index')->withSuccess('Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisPengujian  $jenis_pengujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisPengujian $jenis_pengujian)
    {

        try {
            $jenis_pengujian->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
