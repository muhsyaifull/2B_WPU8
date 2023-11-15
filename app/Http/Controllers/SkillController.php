<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\SKill;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SkillController extends Controller
{
        public function index() 
        {
            return view("RiwayatPendidikan");
        }
        public function store(Request $request)
        {
            $request->validate([
                'moreFields.*.nama_skill' => 'required',
                'moreFields.*.deskripsi_skill' => 'required',
            ]);

            foreach ($request->moreFields as $key => $value) {
                // dd($value); // Add this line to dump and die
                // dd([
                //     'user_id' => \DB::table('profile')->where('akun_id', auth()->id())->value('id'),
                //     'nama_skill' => $value['nama_skill'],
                //     'deskripsi_skill' => $value['deskripsi_skill'],
                //     'lokasi' => $value['lokasi'],
                //     'tanggal_masuk_kerja' => $value['tanggal_masuk_kerja'],
                //     'tanggal_keluar_kerja' => $value['tanggal_keluar_kerja'],
                // ]);
                Skill::create([
                    'user_id' => \DB::table('profile')->where('akun_id', auth()->id())->value('id'),
                    'nama_skill' => $value['nama_skill'],
                    'deskripsi_skill' => $value['deskripsi_skill'],
                ]);
            }
            return back();
            // return redirect()->route('dashboard')->with('success', 'Data has been stored successfully.');
        }

        public function saveData(Request $request)
    {
        $request->validate([
            'moreFields.*.nama_skill' => 'required',
            'moreFields.*.deskripsi_skill' => 'required',
        ]);

        $user_id = Profile::where('akun_id', auth()->id())->value('id');

        foreach ($request->moreFields as $key => $value) {
            if (!empty($value['id'])) {
                // Update existing record
                Skill::where('id', $value['id'])->update([
                    'nama_skill' => $value['nama_skill'],
                    'deskripsi_skill' => $value['deskripsi_skill'],
                ]);
            } else {
                // Create new record
                Skill::create([
                    'user_id' => $user_id,
                    'nama_skill' => $value['nama_skill'],
                    'deskripsi_skill' => $value['deskripsi_skill'],
                ]);
            }
        }

        return response()->json(['message' => 'Data has been saved successfully.']);
    }
}
