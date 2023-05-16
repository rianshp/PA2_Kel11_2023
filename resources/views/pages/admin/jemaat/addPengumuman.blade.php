@extends('layouts.admin.master')
@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')
<!-- Main content -->
<div class="content-wrapper">

       <!-- Inner content -->
       <div class="content-inner">

              <!-- Page header -->
              <div class="page-header page-header-light shadow">
                     <div class="page-header-content d-lg-flex">
                            

                            
                     </div>

                     <div class="page-header-content d-lg-flex border-top py-1">
                            <div class="d-flex">
                                   <div class="breadcrumb py-2">
                                        @hasrole('admin')
								<a href="{{url('admin/')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
								@else
								<a href="{{url('sek/')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
								@endhasrole
                                          <span href="#" class="breadcrumb-item">Jemaat</span>
                                          <span class="breadcrumb-item active">Pengumuman</span>
                                          <span class="breadcrumb-item active">Tambah Pengumuman</span>
                                   </div>

                                   <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                          <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                   </a>
                            </div>

                            <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                                   <div class="d-lg-flex mb-2 mb-lg-0">
                                                 
                                   </div>
                            </div>
                     </div>
              </div>
              <!-- /page header -->


              <!-- Content area -->
              <div class="content">

                     <!-- Main charts -->
                     <div class="row">
                            <div class="col-xl-7">

                            </div>
                            
                            <div class="col-xl-5">
                                   
                            </div>
                     </div>
                     <!-- /main charts -->
                     
                     

                     <!-- Dashboard content -->
                     <div class="card">
                         <div class="card-header">
                              @if ($p->id)
                              <h5 class="mb-0">Edit Pengumuman</h5>    
                              @else
                                  
                              <h5 class="mb-0">Tambah Pengumuman</h5>
                              @endif
                         </div>                        

                         <div class="card-body border-top">
                              @if ($p->id)
                              <form action="{{route('pengumuman.update', $p->id)}}" method="POST">
                                   @csrf
                                   @method('PATCH')
                                   <div class="mb-3">
                                        <label class="form-label">Judul </label>
                                        <input type="text" value="{{$p->judul}}" name="judul" class="form-control" placeholder="Judul Pengumuman">
                                   </div>

                                   <div class="mb-3">
                                        <label class="form-label">Isi</label>
                                        <textarea rows="3" cols="3" name="isi" class="form-control" placeholder="Isi Pengumuman">{{$p->isi}}</textarea>
                                   </div>                         
                                
                                   <div class="mb-3">
                                        <label class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" value="{{$p->tanggal}}"  class="form-control" placeholder="">
                                   </div>

                                   <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                                   </div>
                              </form>                                      
                              @else
                              <form action="{{route('pengumuman.store')}}" method="POST">
                                   @csrf
                                   <div class="mb-3">
                                        <label class="form-label">Judul </label>
                                        <input type="text" name="judul" class="form-control" placeholder="Judul Pengumuman">
                                   </div>

                                   <div class="mb-3">
                                        <label class="form-label">Isi</label>
                                        <textarea rows="3" cols="3" name="isi" class="form-control" placeholder="Isi Pengumuman"></textarea>
                                   </div>                         
                                
                                   <div class="mb-3">
                                        <label class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal"  class="form-control" placeholder="">
                                   </div>

                                   <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                                   </div>
                              </form>                                  
                              @endif
                         </div>
                    </div>
                     <!-- /dashboard content -->

              </div>
              <!-- /content area -->


              <!-- Footer -->
              <div class="navbar navbar-sm navbar-footer border-top">
               <div class="container-fluid">
                    <span>&copy; 2023 HKBP Pearaja Tarutung</span>
                    
               </div>
          </div>
              <!-- /footer -->

       </div>
       <!-- /inner content -->

</div>
@endsection
<!-- /main content -->
<script>
       @if(session()->has('success'))
       toastr.options = {
           "closeButton": true
       }
       toastr.success("{{ session()->get('success') }}")
       @endif
</script>