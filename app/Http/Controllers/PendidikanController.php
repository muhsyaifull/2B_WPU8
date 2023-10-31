<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Alamat;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PendidikanController extends Controller
{
    public function editProfile($id)
    {
        $profile = Profile::findOrFail($id);
        return view('datadiri', compact('profile'));
    }

    public function showProfile($id)
    {
        // if (Session::get('profile_id')){
        //     $profile = Profile::findOrFail(Session::get('profile_id'));
        //     return view('profile_page', compact('profile'));
        // } else {
        //     return redirect()->route('login-page');
        // }
        $profile = Profile::findOrFail($id);
        return view('profile_page', compact('profile'));
    }

    public function index()
    {
        return view('Home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('RiwayatPendidikan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
       
        $profile = Profile::findOrFail($id); // Mendapatkan profil berdasarkan ID
    
        $pendidikanData = [
            'user_id' => $profile->id,
            'jenjang' => $request->jenjang,
            'nama_sekolah' => $request->nama_sekolah,
            'lokasi' => $request->lokasi,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_lulus' => $request->tanggal_lulus,
        ];
        // dd($pendidikanData);
    
        Pendidikan::create($pendidikanData);
    
        // Redirect ke halaman lain atau sesuai kebutuhan
        return redirect('/Organisasi');
    }

}
