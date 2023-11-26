<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\SKill;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()    {
        $skill = \DB::table('skill')->paginate(10);
        return view('crudSkill.index',compact('skill'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }   
    
    public function create() {
        return view('crudSkill.create');
    }  
    
    public function store(Request $request) {
        $request->validate([
            'nama_skill' => 'required',
            'deskripsi_skill' => 'required',
        ]);
    
        // Retrieve the user's profile ID
        $profileId = \DB::table('profile')->where('akun_id', auth()->id())->value('id');
        // Create the Skill with the associated profile ID
        Skill::create([
            'user_id' => $profileId,
            'nama_skill' => $request->nama_skill,
            'deskripsi_skill' => $request->deskripsi_skill,
            // Add other fields as needed
        ]);
        // dd());
        return redirect()->route('skill.index')
                        ->with('success','Product created successfully.');
    }
    
   
    public function show(Skill $skill){
        return view('crudSkill.show',compact('skill'));
    }  
    
    public function edit(Skill $skill){
        return view('crudSkill.edit',compact('skill'));
    } 
    
    public function update(Request $request, Skill $skill){
        $request->validate([
            'nama_skill' => 'required',
            'deskripsi_skill' => 'required',
        ]);
  
        $skill->update($request->all());
  
        return redirect()->route('skill.index')
                        ->with('success','Product updated successfully');
    }  
    
    public function destroy(Skill $skill) {
        $skill->delete();
  
        return redirect()->route('skill.index')
                        ->with('success','Product deleted successfully');
    }
}
