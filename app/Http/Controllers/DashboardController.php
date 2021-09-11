<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard/team.index', [
            'title' => 'Dashboard Team',
            'active' => 'dashboard'
        ]);
    }

    // public function index()
    // {
    //     return view('dashboard.index', [
    //         'title' => 'Dashboard',
    //         'active' => 'dashboard'
    //     ]);
    // }

    public function sertifikat()
    {
        return view('dashboard.team.sertifikat', [
            'title' => 'Dashboard Team',
            'active' => 'dashboard'
        ]);
    }

    public function peserta()
    {
        return view('dashboard.team.peserta', [
            'title' => 'Dashboard User',
            'active' => 'dashboard'
        ]);
    }

    public function team()
    {
        return view('dashboard.team.team', [
            'title' => 'Dashboard User',
            'active' => 'dashboard'
        ]);
    }
}
