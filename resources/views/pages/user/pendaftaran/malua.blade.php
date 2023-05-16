@extends('layouts.user.master')
@section('title', 'Daftar Malua')
@section('content')
<section class="wrapper bg-soft-primary text-white">
     <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h1 class="display-1 text-dark mb-3">Malua</h1>
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
                    <form  href="{{route('malua.store')}}" method="POST">
                      @csrf
                    <div class=" row justify-content-around p-10 p-md-11 p-lg-13">
                         <div class="col-lg-6 mb-lg-5">
                              <div class="form-select-wrapper mb-4">
                                <select class="form-select" aria-label="Default select example" name="id_user_jemaat" id="country" required>
                                  <option value="" selected disabled>Nama Jemaat</option>
                                  @foreach ($jemaat as $j)
                                       <option value="{{$j->id}}" {{$j->id==$data->id_user_jemaat?"selected":""}}>{{ucfirst($j->nama)}}</option>
                                  @endforeach                                             
                                  </select>
                              </div>
                              <div class="form-floating mb-4">
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Email" id="loginEmail">
                                <label for="loginEmail">Tempat Lahir</label>
                              </div>              

                         </div>
                         <div class="col-lg-6 mb-lg-5">

                              <div class="form-floating mb-4">
                                 <input type="date" name="tanggal_baptis"  class="form-control" placeholder="Name" id="loginName">
                                 <label for="loginName">Tanggal Baptis</label>
                               </div>
                               <div class="form-floating mb-4">
                                 <input type="date" class="form-control" name="tanggal_lahir" placeholder="Email" id="loginEmail">
                                 <label for="loginEmail">Tanggal Lahir</label>
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