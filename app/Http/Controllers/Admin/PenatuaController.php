<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sektor;
use App\Models\Penatua;
use App\Models\UserJemaat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenatuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $penatua = Penatua::Join('sektor', 'sektor.id', '=', 'penatua.id_sektor')
        //         ->select('jemaat.*', 'user_jemaat.*')->get();

        // $i = 1;  

        $userJemaat = UserJemaat::with('penatua')->get();
        return view('pages.admin.jemaat.penatua', compact('userJemaat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jemaat = UserJemaat::get();
        $sektor = Sektor::get();
        $penatua = new Penatua;
        return view('pages.admin.jemaat.addPenatua', compact('sektor', 'penatua', 'jemaat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        $validators = Validator::make($request->all(), [            
            'id_jemaat' => 'required',
            'status' => 'required',
            'id_sektor' => 'required',
            'gelar' => 'required',            
        ]);

      
        $jemaat = new Penatua;
        $jemaat->id_jemaat = $request->id_jemaat;  
        $jemaat->status = $request->status;  
        $jemaat->id_sektor = $request->id_sektor;    
        $jemaat->gelar = $request->gelar;      
        $jemaat->created_by = Auth::user()->id;
        $jemaat->save();

        if (Auth::user()->hasRole('admin')) {
                return redirect('admin/jemaat/penatua')->with('success', 'Berhasil Ditambahkan');            
        }else{
                return redirect('sek/jemaat/penatua')->with('success', 'Berhasil Ditambahkan');            
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Penatua $penatua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penatua $penatua, $id)
    {
        $sektor = Sektor::get();
        $penatua = Penatua::find($id);
        return view('pages.admin.jemaat.addPenatua', compact('sektor', 'penatua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, Penatua $penatua)
    {

        $jemaat = Penatua::find($id);
        $jemaat->id_jemaat = $request->id_jemaat;  
        $jemaat->status = $request->status;  
        $jemaat->id_sektor = $request->id_sektor;    
        $jemaat->gelar = $request->gelar;      
        $jemaat->updated_by = Auth::user()->id;
        $jemaat->update();

        if (Auth::user()->hasRole('admin')) {
            return redirect('admin/jemaat/penatua')->with('update', 'Berhasil Diedit');            
        }else{
            return redirect('sek/jemaat/penatua')->with('update', 'Berhasil Diedit');            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penatua $penatua, $id)
    {
      $sektor = Penatua::find($id);        
      $sektor->delete();

      if (Auth::user()->hasRole('admin')) {
            return redirect('admin/jemaat/sektor')->with('sdelete', 'Berhasil Dihapus');            
      }else{
            return redirect('sek/jemaat/sektor')->with('sdelete', 'Berhasil Dihapus');            
      }
    }
}
