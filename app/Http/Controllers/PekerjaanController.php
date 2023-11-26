<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Pekerjaan;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()    {
        $pekerjaan = \DB::table('pekerjaan')->paginate(10);
        return view('crudPekerjaan.index',compact('pekerjaan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }   
    
    public function create() {
        return view('crudPekerjaan.create');
    }  
    
    public function store(Request $request) {
        $request->validate([
            'nama_perusahaan' => 'required',
            'posisi' => 'required',
            'lokasi' => 'required',
            'tanggal_masuk_kerja' => 'required',
            'tanggal_keluar_kerja'=> 'required',
        ]);
    
        // Retrieve the user's profile ID
        $profileId = \DB::table('profile')->where('akun_id', auth()->id())->value('id');
    
        // Create the Pekerjaan with the associated profile ID
        Pekerjaan::create([
            'user_id' => $profileId,
            'nama_perusahaan' => $request->nama_perusahaan,
            'posisi' => $request->posisi,
            'lokasi' => $request->lokasi,
            'tanggal_masuk_kerja' => $request->tanggal_masuk_kerja,
            'tanggal_keluar_kerja' => $request->tanggal_keluar_kerja,
            // Add other fields as needed
        ]);
    
        return redirect()->route('pekerjaan.index')
                        ->with('success','Product created successfully.');
    }
    
   
    public function show(Pekerjaan $pekerjaan){
        return view('crudPekerjaan.show',compact('pekerjaan'));
    }  
    
    public function edit(Pekerjaan $pekerjaan){
        return view('crudPekerjaan.edit',compact('pekerjaan'));
    } 
    
    public function update(Request $request, Pekerjaan $pekerjaan){
        $request->validate([
            'nama_perusahaan' => 'required',
            'posisi' => 'required',
            'lokasi' => 'required',
            'tanggal_masuk_kerja' => 'required',
            'tanggal_keluar_kerja'=> 'required',
        ]);
  
        $pekerjaan->update($request->all());
  
        return redirect()->route('pekerjaan.index')
                        ->with('success','Product updated successfully');
    }  
    
    public function destroy(Pekerjaan $pekerjaan) {
        $pekerjaan->delete();
  
        return redirect()->route('pekerjaan.index')
                        ->with('success','Product deleted successfully');
    }
}