<?php

namespace App\Http\Controllers;

use App\Models\PCR;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class PCRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcr = PCR::all();
        return view('pcr.index', compact('pcr'));
    }

    public function upload(Request $request) {
        $request->validate([
            'file_url' => 'required|mimes:pdf',
            'pcr_id' => 'unique:pcrs',
        ]);
  
        $fileName = $request->pcr_id.'.'.$request->file_url->extension();  
   
        $request->file_url->move(public_path('uploads'), $fileName);

        $pcr = new PCR();
        $pcr->file_url = $fileName;
        $pcr->pcr_id = $request->pcr_id;
        $pcr->save();
   
        return back()
            ->with('success','You have successfully uploaded file.')
            ->with('file_url',$fileName);
    }

    public function show($pcr_id) {
        // $pcr = PCR::where('pcr_id', $pcr_id)->get();
        $pcr = PCR::all();
        return view('pcr.show', compact('pcr'));
    }
}
