<?php

namespace App\Http\Controllers;

use App\Models\DetailStp;
use App\Models\JenisPengujian;
use App\Models\Lhu;
use App\Models\Lhus;
use App\Models\Permohonan;
use App\Models\Stp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->now = Carbon::now()->translatedFormat('d F Y');
    }
    public function kegiatanAll()
    {
        $data = Kegiatan::all();
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.kegiatanAll', ['data' => $data, 'now' => $now]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Semua Kegiatan.pdf');
    }
    public function stp($id)
    {
        $data = Permohonan::FindOrFail($id);
        $now = $this->now;
        $pdf = PDF::loadView('admin.report.stp', ['data' => $data, 'now' => $now]);
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan STP.pdf');
    }

    public function lhus($id)
    {
        $permohonan = Permohonan::FindOrFail($id);
        $detailStp = DetailStp::whereStpId($permohonan->stp->id)->first();
        $data = Lhus::whereDetailStpId($detailStp->id)->get();

        $now = $this->now;
        $pdf = PDF::loadView('admin.report.lhus', compact('now', 'data', 'permohonan'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan LHUS.pdf');
    }

    public function lhu($id)
    {
        $permohonan = Permohonan::FindOrFail($id);
        $detailStp = DetailStp::whereStpId($permohonan->stp->id)->first();
        $data = Lhu::whereDetailStpId($detailStp->id)->get();

        $now = $this->now;
        $pdf = PDF::loadView('admin.report.lhu', compact('now', 'data', 'permohonan'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan LHU.pdf');
    }

    public function fpps($id)
    {
        $data = Permohonan::FindOrFail($id);

        $now = $this->now;
        $pdf = PDF::loadView('admin.report.fpps', compact('now', 'data'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan FPPS.pdf');
    }
    public function fppsDetail($id)
    {
        $data = Permohonan::FindOrFail($id);

        $now = $this->now;
        $pdf = PDF::loadView('admin.report.detail-fpps', compact('now', 'data'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Detail FPPS.pdf');
    }

    public function permohonanAll()
    {
        $data = Permohonan::all();

        $now = $this->now;
        $pdf = PDF::loadView('admin.report.permohonanAll', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Permohonan.pdf');
    }

    public function jenisPengujian(Request $request)
    {
        $data = JenisPengujian::findOrFail($request->jenis_pengujian_id);

        $now = $this->now;
        $pdf = PDF::loadView('admin.report.jenis-pengujian', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Jenis Pengujian.pdf');
    }

    public function pemohon()
    {
        $data = User::where('role', '0')->get();

        $now = $this->now;
        $pdf = PDF::loadView('admin.report.pemohon', compact('now', 'data'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Data Pemohon.pdf');
    }
}
