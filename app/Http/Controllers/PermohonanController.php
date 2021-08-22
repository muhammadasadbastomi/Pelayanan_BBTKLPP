<?php

namespace App\Http\Controllers;

use App\Models\JenisPengujian;
use App\Models\Permohonan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (Auth::user()->role) {
            case 0:
                $data = Permohonan::whereUserId(Auth::id())->with('detail_permohonan')->get();
                return view('pemohon.permohonan.index', compact('data'));
                break;
            case 2:
                $data = Permohonan::whereHas('detail_permohonan')->get();
                return view('penyelia.permohonan.index', compact('data'));
                break;

            default:
                $data = Permohonan::whereHas('detail_permohonan')->get();

                return view('admin.permohonan.index', compact('data'));
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisSample = JenisPengujian::all();

        return view('pemohon.permohonan.create', compact('jenisSample'));
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

        Permohonan::create($input);

        return redirect()->route('pemohon.permohonan.index')->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        switch (Auth::user()->role) {
            case 0:
                return view('pemohon.permohonan.show', compact('permohonan'));
                break;

            default:
                return view('admin.permohonan.show', compact('permohonan'));
                break;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        switch (Auth::user()->role) {
            case 0:
                return view('pemohon.permohonan.edit', compact('permohonan'));
                break;

            default:
                return view('admin.permohonan.edit', compact('permohonan'));
                break;
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        $input = $request->all();

        $permohonan->update($input);

        switch (Auth::user()->role) {
            case 0:
                return redirect()->route('pemohon.permohonan.index')->withSuccess('Data berhasil diubah');
                break;

            default:
                return redirect()->route('admin.permohonan.index')->withSuccess('Permohonan berhasil diverifikasi');
                break;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {

        try {
            $permohonan->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
