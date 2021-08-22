<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function pemohonIndex()
    {
        return view('pemohon.index');
    }

    public function penyeliaIndex()
    {
        return view('penyelia.index');
    }
}
