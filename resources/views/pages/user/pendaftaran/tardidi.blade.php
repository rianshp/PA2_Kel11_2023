@extends('layouts.user.master')
@section('title', 'Daftar Tardidi')

@section('content')
<section class="wrapper bg-soft-primary text-white">
     <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h1 class="display-1 text-dark mb-3">Tardidi</h1>
           <nav class="d-inline-block" aria-label="breadcrumb">
             <ol class="breadcrumb text-dark">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
             </ol>
           </nav>
           <!-- /nav -->
         </div>
         <!-- /column -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container -->
   </section>
   <!-- /section -->
   <section class="wrapper bg-light">
     <div class="container pb-14 pb-md-16">
       <div class="row">
         <div class="col mt-n19">
           <div class="card shadow-lg">
             <div class="row gx-0 text-center">
               <div class="col-lg-12 ">
                    <form class="text-start" href="{{route('tardidi.store')}}" method="POST">
                      @csrf
                    <div class=" row justify-content-around p-10 p-md-11 p-lg-13">
                         <div class="col-lg-6 mb-lg-5">
                              <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" id="">
                                <label for="">Nama</label>
                              </div>
                              <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" id="loginEmail">
                                <label for="">Tempat Lahir</label>
                              </div>
                              <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="ayah" placeholder="Nama Ayah" id="loginName">
                                <label for="">Nama Ayah</label>
                              </div>           
                            
                         </div>
                         <div class="col-lg-6 mb-lg-5">
                              <div class="form-select-wrapper mb-4">
                                <select class="form-select" aria-label="Default select example" name="id_sektor" id="country" required>
                                        <option value="" selected disabled>Pilih Sektor</option>
                                  @foreach ($sektor as $k)
                                        <option value="{{$k->id}}" {{$k->id==$data->id_sektor?"selected":""}}>{{ucfirst($k->nama)}}</option>
                                  @endforeach
                                </select>
                              </div>
                              
                               <div class="form-floating password-field mb-4">
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" id="">                                
                                <label for="">Tanggal Lahir</label>
                              </div>    
                               <div class="form-floating mb-4">
                                 <input type="text" class="form-control" name="ibu" placeholder="Nama Ibu" id="">
                                 <label for="">Nama Ibu</label>
                               </div>
                                            
                         </div>
                              <button type="submit" class="btn btn-primary rounded-pill btn-login col-lg-4 ">Daftar</button>
                         </div>
                    </div>              
               </form>                   
               <!--/column -->
             </div>
             <!--/.row -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /column -->
       </div>
       <!-- /.row -->
     </div>
     <!-- /.container -->
   </section>
@endsection