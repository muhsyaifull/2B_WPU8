<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class ResumeController extends Controller
{
    public function create()
    {
        return view('MakeCv');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'experience' => 'required',
            'education' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'skill' => 'required',
            'description' => 'required',
        ]);
    
        $resume = Resume::create($data);
    
        // Buat PDF dengan laravel-pdf
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('ShowCv', ['resume'=>$resume]);
    
        // // Simpan PDF ke direktori yang diinginkan (misalnya, storage/app/public)
        // $pdf->save(public_path('cv/cv_' . $resume->id . '.pdf'));
    
        return $pdf->stream();
    }

    public function show()
    {
        $resume = Resume::all();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadview('ShowCv',['resume'=>$resume]);
    	return $pdf->stream();   
    }    

}
