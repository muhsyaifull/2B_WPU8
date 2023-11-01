<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Alamat;
use App\Models\Pendidikan;
use App\Models\Pekerjaan;
use App\Models\Skill;
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
        // Anda dapat menambahkan validasi atau logika tambahan di sini sesuai kebutuhan

        return view('/EditDataDiri', compact('profile'));
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
        // return view('profile_page', compact('profile'));
        $alamat = Alamat::where('user_id', $id)->first();
        $pekerjaan = Pekerjaan::where('user_id', $id)->first();
        $pendidikan = Pendidikan::where('user_id', $id)->first();
        $skill = Skill::where('user_id', $id)->first();

        return view('profile_page', compact('profile', 'alamat', 'pekerjaan', 'pendidikan', 'skill'));
    }

    public function index()
    {
        $profiles = Profile::all(); // Fetch all profiles or adjust the query as needed
        return view('HalamanDaftarCV', compact('profiles'));
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image_path'] = 'images/' . $imageName; // Save the image path in the database
            // You should save $imageName to the database under an appropriate column (e.g., 'image_path')
        }
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

        // $profile = Profile::findOrFail($id); // Mendapatkan profil berdasarkan ID
    
        $pendidikanData = [
            'user_id' => $profile->id,
            'jenjang' => $request->jenjang,
            'nama_sekolah' => $request->nama_sekolah,
            'lokasi' => $request->lokasi,
            'tanggal_masuk' => $request->tanggal_mulai,
            'tanggal_lulus' => $request->tanggal_lulus,
        ];
    
        Pendidikan::create($pendidikanData);

        $pekerjaanData = [
            'user_id' => $profile->id,
            'nama_perusahaan' => $request->nama_perusahaan,
            'posisi' => $request->posisi,
            'lokasi' => $request->lokasi,
            'tanggal_masuk_kerja' => $request->tanggal_mulai_kerja,
            'tanggal_keluar_kerja' => $request->tanggal_keluar_kerja,
        ];
        // dd($pekerjaanData);
    
        Pekerjaan::create($pekerjaanData);

        $skillData = [
            'user_id' => $profile->id,
            'nama_skill' => $request->nama_skill,
            'deskripsi_skill' => $request->deskripsi_skill,
        ];
        // dd($skillData);

        Skill::create($skillData);
    
        // Redirect ke halaman lain atau sesuai kebutuhan
        return redirect()->route('daftar-profile');

    }
    
        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Find the profile you want to update
    $profile = Profile::findOrFail($id);

    // Validate the input data
    $validatedData = $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'agama' => 'required',
        'jenis_kelamin' => 'required',
        'no_telepon' => 'required',
        'email' => 'required',
    ], [
        'nama.required' => 'Nama wajib diisi',
        'deskripsi.required' => 'Deskripsi wajib diisi',
        'tempat_lahir.required' => 'Tempat Lahir wajib diisi',
        'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
        'agama.required' => 'Agama wajib diisi',
        'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
        'no_telepon.required' => 'Nomor Telepon wajib diisi',
        'email.required' => 'Email wajib diisi',
    ]);

    // Check if a new image file is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $profile->image_path = 'images/' . $imageName;
    }

    // Update the profile data with the new data
    $profile->nama = $validatedData['nama'];
    $profile->deskripsi = $validatedData['deskripsi'];
    $profile->tempat_lahir = $validatedData['tempat_lahir'];
    $profile->tanggal_lahir = $validatedData['tanggal_lahir'];
    $profile->agama = $validatedData['agama'];
    $profile->jenis_kelamin = $validatedData['jenis_kelamin'];
    $profile->no_telepon = $validatedData['no_telepon'];
    $profile->email = $validatedData['email'];

    // Save the updated profile
    $profile->save();

    // Redirect to a specific route or page, e.g., the profile page
    return redirect()->route('profil.show', ['id' => $id]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::findOrFail($id);

        // Periksa dan hapus alamat jika ada
        if ($profile->alamat) {
            $profile->alamat->delete();
        }

        // Periksa dan hapus pendidikan jika ada
        if ($profile->pendidikan) {
            $profile->pendidikan->delete();
        }

        // Periksa dan hapus pekerjaan jika ada
        if ($profile->pekerjaan) {
            $profile->pekerjaan->delete();
        }

        // Periksa dan hapus skill jika ada
        if ($profile->skill) {
            $profile->skill->delete();
        }

        // Hapus profil
        $profile->delete();

        // Redirect ke halaman lain atau sesuai kebutuhan setelah menghapus profil
        return redirect()->route('daftar-profile'); // Contoh pengalihan ke halaman beranda
    }
    
}
