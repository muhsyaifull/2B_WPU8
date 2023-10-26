<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Alamat;
use App\Models\Pendidikan;
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
       
        // Validasi data masukan
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
        ],[
            'nama.required'=> 'wajib d isi',
            'deskripsi.required' => 'required',
            'tempat_lahir.required' => 'required',
            'tanggal_lahir.required' => 'required',
            'agama.required' => 'required',
            'jenis_kelamin.required' => 'jenis kelamin isi ath bro',
            'no_telepon.required' => 'masukin bro',
            'email.required' => 'masukin bro',
        ]);
        // dd($validatedData);

        // Simpan data baru ke dalam database
        $profile = Profile::create($validatedData);

        // Simpan data alamat terlebih dahulu
        $alamatData = [
            'user_id' => $profile->id,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'dusun' => $request->dusun,
            'poscode' => $request->poscode,
        ];
        // dd($alamatData);
        
        Alamat::create($alamatData);

        // Redirect ke halaman index atau ke halaman lain yang sesuai
        return redirect('/Pendidikan');
    }

    public function Pendidikan(Request $request,string $id)
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
        dd($pendidikanData);
    
        Pendidikan::create($pendidikanData);
    
        // Redirect ke halaman lain atau sesuai kebutuhan
        return redirect('/Organisasi');
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
