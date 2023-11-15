<?php

    namespace App\Http\Controllers;

    use App\Models\Profile;
    use App\Models\Pendidikan;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    

    class PendidikanController extends Controller
    {
        public function index() 
        {
            return view("RiwayatPendidikan");
        }
        public function store(Request $request)
    {
        $request->validate([
            'moreFields.*.nama_sekolah' => 'required',
            'moreFields.*.jenjang' => 'required',
            'moreFields.*.lokasi' => 'required',
            'moreFields.*.tanggal_masuk' => 'required',
            'moreFields.*.tanggal_lulus' => 'required',
        ]);

        foreach ($request->moreFields as $key => $value) {
            // dd($value); // Add this line to dump and die
            // dd([
            //     'user_id' => \DB::table('profile')->where('akun_id', auth()->id())->value('id'),
            //     'nama_sekolah' => $value['nama_sekolah'],
            //     'jenjang' => $value['jenjang'],
            //     'lokasi' => $value['lokasi'],
            //     'tanggal_masuk' => $value['tanggal_masuk'],
            //     'tanggal_lulus' => $value['tanggal_lulus'],
            // ]);
            Pendidikan::create([
                'user_id' => \DB::table('profile')->where('akun_id', auth()->id())->value('id'),
                'nama_sekolah' => $value['nama_sekolah'],
                'jenjang' => $value['jenjang'],
                'lokasi' => $value['lokasi'],
                'tanggal_masuk' => $value['tanggal_masuk'],
                'tanggal_lulus' => $value['tanggal_lulus'],
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
                'jenjang' => 'required',
                'nama_sekolah' => 'required',
                'lokasi' => 'required',
                'tanggal_masuk' => 'required',
                'tanggal_lulus' => 'required',
            ]);

            $pendidikan = Pendidikan::where('user_id', $id)->first();
            $pendidikan->update($request->all());

            return redirect()->route('daftar-profile');
        }

        public function destroy($id)
        {
            $pendidikan = Pendidikan::find($id);
            
            if ($pendidikan) {
                $pendidikan->delete();
            }

            return redirect()->route('daftar-profile');
        }
    }
