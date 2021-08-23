<?php

namespace App\Http\Controllers;

use App\Models\DetailJenisPengujian;
use App\Models\DetailStp;
use App\Models\Permohonan;
use App\Models\Stp;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $stp = Stp::wherePermohonanId($id)->first();
        if (!$stp) {
            $stp = new Stp;
            $stp->permohonan_id = $id;
            $stp->user_id = Auth::id();
            $stp->save();
            return view('admin.stp.index', compact('stp'));
        }
        return view('admin.stp.index', compact('stp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $permohonan = Permohonan::findOrFail($id);

        $stp = Stp::wherePermohonanId($id)->first();

        $penyelia = User::whereRole(2)->get();

        $detailJenisPengujian = DetailJenisPengujian::whereJenisPengujianId($permohonan->jenis_pengujian_id)->get();

        return view('admin.stp.create', compact('stp', 'penyelia', 'detailJenisPengujian'));

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

        $data = DetailStp::create($input);

        return redirect()->route('admin.stp.index', $data->stp->permohonan_id)->withSuccess('Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stp  $stp
     * @return \Illuminate\Http\Response
     */
    public function show(Stp $stp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stp  $stp
     * @return \Illuminate\Http\Response
     */
    public function edit(Stp $stp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stp  $stp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stp $stp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stp  $stp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailStp = DetailStp::findOrFail($id);
        try {
            $detailStp->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withErrors('Data gagal dihapus');

            }
        }

    }
}
