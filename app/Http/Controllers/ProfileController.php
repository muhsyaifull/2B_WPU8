<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use App\Models\Alamat;
use App\Models\Pendidikan;
use App\Models\Pekerjaan;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class ProfileController extends Controller
{

    public function editProfile($id)
    {
        $profile = Profile::findOrFail($id);
        // Anda dapat menambahkan validasi atau logika tambahan di sini sesuai kebutuhan
        $alamat = Alamat::where('user_id', $id)->first();
        $pendidikan = Pendidikan::where('user_id', $id)->first();
        $pekerjaan = Pekerjaan::where('user_id', $id)->first(); // Load Alamat based on user's Profile ID
        $skill = Skill::where('user_id', $id)->first();
        return view('editProfilePage', compact('profile', 'alamat', 'pendidikan', 'pekerjaan', 'skill'));
    }

    public function showProfile($id)
    {
        // if (Session::get('profile_id')){
        //     $profile = Profile::findOrFail(Session::get('profile_id'));
        //     return view('profile_page', compact('profile'));
        // } else {
        //     return redirect()->route('login-page');
        // }
        $id = 1;
        $profile = Profile::findOrFail($id);
        // return view('profile_page', compact('profile'));
        $alamat = Alamat::where('user_id', $id)->first();
        $pekerjaan = Pekerjaan::where('user_id', $id)->first();
        $pendidikan = Pendidikan::where('user_id', $id)->first();
        $skill = Skill::where('user_id', $id)->first();

        return view('profile_page', compact('profile', 'alamat', 'pekerjaan', 'pendidikan', 'skill'));
        // $data = compact('profile', 'alamat', 'pekerjaan', 'pendidikan', 'skill');

    // Uncomment the following line if you want to generate a PDF and view it in the browser.
    // return view('profile_page', $data);

    // Generate the PDF from the 'profile_page' view and show it in the browser
        // $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadview('profile_page', $data);
        // return $pdf->stream('profile.pdf');
        // $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadview('ShowCv',['resume'=>$resume]);
    	// return $pdf->stream();
    }

    public function index()
    {
        $profiles = Profile::all(); // Fetch all profiles or adjust the query as needed
        return view('HalamanDaftarCV', compact('profiles'));
    }


    public function create()
    {
        $profile = new Profile();
        return view('DataDiri', compact('profile'));
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
            'image_path' => 'required',
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
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imageName);
        //     $validatedData['image_path'] = 'images/' . $imageName; // Save the image path in the database
        //     // You should save $imageName to the database under an appropriate column (e.g., 'image_path')
        // }

        $akun_id = auth()->id();
        $validatedData['akun_id'] = $akun_id;
        // // dd($akun_id);
        // // dd(auth()->user());
        // dd($validatedData);
        // Create a new profile with the updated validated data
        $profile = Profile::create([
            'nama' => $validatedData['nama'],
            'deskripsi' => $validatedData['deskripsi'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'agama' => $validatedData['agama'],
            'image_path'=> $validatedData['image_path'],
            'no_telepon' => $validatedData['no_telepon'],
            'email' => $validatedData['email'],
            'akun_id' => $akun_id,
        ]);
        if ($request->hasFile('image_path')) {
            $request->file('image_path')->move('imageUser/', $request->file('image_path')->getClientOriginalName());
            $profile->image_path = $request->file('image_path')->getClientOriginalName();
            $profile->save();
        }

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
    
        // Redirect ke halaman lain atau sesuai kebutuhan
        return redirect()->route('dashboard');

    }
    
        /**
     * Update the specified resource in storage.
     */

     
    public function update(Request $request, $id)
    {
        // Validasi data masukan
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required',
            'email' => 'required',
          ]);
          $profile = Profile::find($id);
          $profile->update($request->all());

        $request->validate([
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'dusun' => 'required',
            'poscode' => 'required',
        ]);
    
        $alamat = Alamat::where('user_id', $id)->first();
        $alamat->update($request->all());

        return redirect()->route('dashboard');
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
