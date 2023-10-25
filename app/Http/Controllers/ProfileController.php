<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Alamat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view('DataDiri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan data alamat terlebih dahulu
        $alamat = new alamat([
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'dusun' => $request->dusun,
            'poscode' => $request->poscode,
        ]);
        $alamat->save();

        // Ambil ID alamat yang baru dibuat
        $alamatId = $alamat->id;

        // Simpan data profil dengan ID alamat yang baru
        $data = [
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat_id' => $alamatId, // Menggunakan ID alamat yang baru
        ];

        // Simpan data profil
        $profile = Profile::create($data);

        // Di sini Anda dapat mengambil ID profil yang baru dibuat
        $profileId = $profile->id;

        // Mengarahkan pengguna ke halaman "profile_page" dengan ID profil
        return redirect()->route('profil.show', ['id' => $profileId]);
    }

        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = Profile::findOrFail($id);

        // Update data profil
        $profile->nama = $request->nama;    
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->tanggal_lahir = $request->tanggal_lahir;
        $profile->jenis_kelamin = $request->jenis_kelamin;
        $profile->agama = $request->agama;
        $profile->no_telepon = $request->no_telepon;
        $profile->email = $request->email;

        // Simpan perubahan
        $profile->save();

        // Redirect ke halaman lain atau sesuai kebutuhan
        return redirect('/Pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::findOrFail($id);

        // Hapus profil
        $profile->delete();

        // Redirect ke halaman lain atau sesuai kebutuhan setelah menghapus profil
        return redirect('/home'); // Contoh pengalihan ke halaman beranda
    }

    
}
