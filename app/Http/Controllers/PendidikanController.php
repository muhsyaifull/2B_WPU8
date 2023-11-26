<?php

    namespace App\Http\Controllers;

    use App\Models\Profile;
    use App\Models\Pendidikan;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    

    class PendidikanController extends Controller
    {
        public function index()    {
            $pendidikan = \DB::table('pendidikan')->paginate(10);
            return view('crudPendidikan.index',compact('pendidikan'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }   
        
        public function create() {
            return view('crudPendidikan.create');
        }  
        
        public function store(Request $request) {
            $request->validate([
                'nama_sekolah' => 'required',
                'jenjang' => 'required',
                'lokasi' => 'required',
                'tanggal_masuk' => 'required',
                'tanggal_lulus'=> 'required',
            ]);
        
            // Retrieve the user's profile ID
            $profileId = \DB::table('profile')->where('akun_id', auth()->id())->value('id');
            // Create the Pendidikan with the associated profile ID
            Pendidikan::create([
                'user_id' => $profileId,
                'nama_sekolah' => $request->nama_sekolah,
                'jenjang' => $request->jenjang,
                'lokasi' => $request->lokasi,
                'tanggal_masuk' => $request->tanggal_masuk,
                'tanggal_lulus' => $request->tanggal_lulus,
                // Add other fields as needed
            ]);
            // dd());
            return redirect()->route('pendidikan.index')
                            ->with('success','Product created successfully.');
        }
        
       
        public function show(Pendidikan $pendidikan){
            return view('crudPendidikan.show',compact('pendidikan'));
        }  
        
        public function edit(Pendidikan $pendidikan){
            return view('crudPendidikan.edit',compact('pendidikan'));
        } 
        
        public function update(Request $request, Pendidikan $pendidikan){
            $request->validate([
                'nama_sekolah' => 'required',
                'jenjang' => 'required',
                'lokasi' => 'required',
                'tanggal_masuk' => 'required',
                'tanggal_lulus'=> 'required',
            ]);
      
            $pendidikan->update($request->all());
      
            return redirect()->route('pendidikan.index')
                            ->with('success','Product updated successfully');
        }  
        
        public function destroy(Pendidikan $pendidikan) {
            $pendidikan->delete();
      
            return redirect()->route('pendidikan.index')
                            ->with('success','Product deleted successfully');
        }
    }
