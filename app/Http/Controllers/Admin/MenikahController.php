<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MenikahController extends Controller
{
    
     public function index(){
          return view('pages.admin.pendaftaran.menikah');
     }
     
     public function create(){

     }

     public function store(Request $request){

     }
  
     public function edit($id){
  
     }
  
     public function update(Request $request){
  
     }
  
     public function destroy($id){
        
     }
     
}
