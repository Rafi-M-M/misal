<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'poto_ktp' => 'required|image|max:2048',
            'poto_kk' => 'required|image|max:2048',
            'jurusan' => 'required|in:Informatika,Industri',
        ]);

        if ($request->hasFile('poto_ktp') && $request->hasFile('poto_kk')) {
            $validated['poto_ktp'] = $request->file('poto_ktp')->store('poto_ktp');
            $validated['poto_kk'] = $request->file('poto_kk')->store('poto_kk');
        }

        Pendaftaran::create($validated);

        return redirect()->route('layanan')->with('success', 'Pendaftaran berhasil.');
    }
}
