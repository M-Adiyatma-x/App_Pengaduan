<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController 
{
    //
    public function index()
    {
        //return view::make('pages.index', array('title' => 'Title'));   
        return view('dashboard', 
            [
                'title' => 'DB_Mahasiswa'
            ]);
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Superadmindb()
    {
        return view('super.Superadmindb',
        [
            'title' => 'DB_Superdamin'
        ]);
    }

    public function SuperPengaduan()
    {
        return view('super.pengaduan',
        [
            'title' => 'SP Pengaduan'
        ]);
    }

    public function Supercracc()
    {
        return view('super.create_account',
        [
            'title' => 'SP Buat Akun'
        ]);
    }

    public function Superdtpengaduan()
    {
        return view('super.detail_pengaduan',
        [
            'title' => 'SP Detail Pengaduan'
        ]);
    }
    public function SuperEdit()
    {
        return view('super.edit',
        [
            'title' => 'Edit'
        ]);
    }

    public function SuperProfil()
    {
        return view('super.profile',
        [
            'title' => 'Profil'
        ]);
    }

    public function SuperEditprofil()
    {
        return view('super.edit_profile',
        [
            'title' => 'Edit Profil'
        ]);
    }

    public function Superdpakun()
    {
        return view('super.superadmindp',
        [
            'title' => 'V Admin'
        ]);
    }

    /**
     * Dashboard kemahasiswaan.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function KemahasiswaanHome()
    {
        return view('kms.kmsdb',
        [
            'title' => 'db_Kemahasiswaan'
        ]);
    }

    public function KmsPengaduan()
    {
        return view('kms.pengaduan',
        [
            'title' => 'kms_pengaduan'
        ]);
    }

    public function Kmscracc()
    {
        return view('kms.create_account',
        [
            'title' => 'Buat Akun'
        ]);
    }

    public function Kmsdtpengaduan()
    {
        return view('kms.detail_pengaduan',
        [
            'title' => 'Detail Pengaduan'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function AkademikHome()
    {
        return view('akd.akddb');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function KamsisdalHome()
    {
        return view('kmd.kmddb');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function SarprasHome()
    {
        return view('sarpras.sarprasdb');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function DireksiHome()
    {
        return view('dk.dkdb');
    }
}
