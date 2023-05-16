<?php

namespace App\Http\Controllers\User;

use App\Models\Bphj;
use App\Models\Dana;
use App\Models\Sektor;
use App\Models\Account;
use App\Models\UserJemaat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JemaatController extends Controller
{
    public function index_jemaat(){
      $all = UserJemaat::join('jemaat', 'jemaat.id', '=', 'user_jemaat.no_induk')->select('jemaat.*', 'user_jemaat.*')->get();
      $i = 1;

      return view('pages.user.jemaat.jemaat', compact('all', 'i'));
    }

    public function index_pengurus(){
      $all = Bphj::join('user_jemaat','user_jemaat.id','=','bphj.id_jemaat')->select('bphj.*','user_jemaat.*')->get();
      $i = 1;
      $j = 1;
      $pen = UserJemaat::with('penatua')->get();
      return view('pages.user.jemaat.pengurus', compact('all', 'i', 'pen','j'));
    }

    public function index_distrik(){
      
      $all = Sektor::get();
      $i = 1;
      
      return view('pages.user.jemaat.distrik', compact('all', 'i'));           
    }

    public function index_keuangan(){
      $masuk = Dana::select('dana.*')->where('kategori', '=', 'masuk')->get();
      $keluar = Dana::select('dana.*')->where('kategori', '=', 'keluar')->get();
      $i = 1;
      return view('pages.user.jemaat.keuangan', compact('masuk', 'keluar', 'i'));      
    }
    
}
