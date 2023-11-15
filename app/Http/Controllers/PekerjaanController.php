<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Pekerjaan;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index() 
        {
            return view("RiwayatPendidikan");
        }
        public function store(Request $request)
        {
            $request->validate([
                'moreFields.*.nama_perusahaan' => 'required',
                'moreFields.*.posisi' => 'required',
                'moreFields.*.lokasi' => 'required',
                'moreFields.*.tanggal_masuk_kerja' => 'required',
                'moreFields.*.tanggal_keluar_kerja' => 'required',
            ]);

            foreach ($request->moreFields as $key => $value) {
                // dd($value); // Add this line to dump and die
                // dd([
                //     'user_id' => \DB::table('profile')->where('akun_id', auth()->id())->value('id'),
                //     'nama_perusahaan' => $value['nama_perusahaan'],
                //     'posisi' => $value['posisi'],
                //     'lokasi' => $value['lokasi'],
                //     'tanggal_masuk_kerja' => $value['tanggal_masuk_kerja'],
                //     'tanggal_keluar_kerja' => $value['tanggal_keluar_kerja'],
                // ]);
                Pekerjaan::create([
                    'user_id' => \DB::table('profile')->where('akun_id', auth()->id())->value('id'),
                    'nama_perusahaan' => $value['nama_perusahaan'],
                    'posisi' => $value['posisi'],
                    'lokasi' => $value['lokasi'],
                    'tanggal_masuk_kerja' => $value['tanggal_masuk_kerja'],
                    'tanggal_keluar_kerja' => $value['tanggal_keluar_kerja'],
                ]);
            }

            return redirect()->route('dashboard')->with('success', 'Data has been stored successfully.');
        }

            public function view()
            {
                // Retrieve or create a profile instance
                $profile = Profile::firstOrNew(['user_id' => auth()->user()->id]);

                return view('your.view.name', compact('profile'));
            }

            public function update(Request $request, $id)
            {
                $request->validate([
                    'posisi' => 'required',
                    'nama_perusahaan' => 'required',
                    'lokasi' => 'required',
                    'tanggal_masuk_kerja' => 'required',
                    'tanggal_keluar_kerja' => 'required',
                ]);

                $pekerjaan = Pekerjaan::where('user_id', $id)->first();
                $pekerjaan->update($request->all());

                return redirect()->route('daftar-profile');
            }

        public function destroy($id)
        {
            $pekerjaan = Pekerjaan::find($id);
            
            if ($pekerjaan) {
                $pekerjaan->delete();
            }

            return redirect()->route('daftar-profile');
        }
    }