@extends('layouts.admin.master')
@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assetss/js/vendor/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('assetss/demo/pages/form_select2.js')}}"></script>
<script src="{{asset('assetss/js/jquery/jquery.min.js')}}"></script>
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
                                          <span class="breadcrumb-item active">Data Jemaat</span>
                                          <span class="breadcrumb-item active">Tambah Data Jemaat</span>
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
                              @if ($jem->id)
                              <h5 class="mb-0">Edit Jemaat</h5>
                              @else
                                  
                              <h5 class="mb-0">Tambah Jemaat</h5>
                              @endif
                         </div>                        

                         <div class="card-body border-top">
                             @if ($jem->id)
                             <form action="{{route('jemaat.update', $jem->id)}}" method="POST">
                              @csrf
                              @method('PATCH')
                              <div class="mb-3">
                                   <label class="col-form-label col-lg-3">Nomor Induk</label>
                                   <div class="form-control-feedback">
                                        <select name="no_induk" class="form-control select">
                                             <option value="" selected disabled>Nomor Induk</option>
                                             @foreach ($kel as $k)
                                                  <option value="{{$k->id}}" {{$k->id==$jem->no_induk?"selected":""}}>{{$k->id}}</option>
                                             @endforeach             
                                        </select>
                                   </div>
                              </div>

                              <div class="mb-3">
                                   <label class="form-label">Nama </label>
                                   <input type="text" value="{{$jem->nama}}" name="nama" class="form-control" placeholder="Nama">
                              </div>

                              <div class="mb-3">
                                   <label class="form-label">Status</label>
                                        <select name="status" class="form-control form-control-select2">                                                                                     
                                             <option value="aktif" {{$jem->kategori == "aktif"?"selected":""}}>Aktif</option>    
                                             <option value="non-aktif" {{$jem->kategori == "non-aktif"?"selected":""}}>Non-Aktif</option>                                             
                                        </select>
                              </div>

                              <div class="mb-3">
                                   <label class="form-label">Tempat Lahir </label>
                                   <input type="text" value="{{$jem->tempat_lahir}}" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                              </div>
                              
                              <div class="mb-3">
                                   <label class="form-label">Tanggal Lahir</label>
                                   <input type="date" name="tgl_lahir" value="{{$jem->tgl_lahir}}" class="form-control" placeholder="Tanggal Lahir">
                              </div>

                              <div class="mb-3">
                                   <label class="form-label">Tanggal Baptis </label>
                                   <input type="date" name="baptis" value="{{$jem->baptis}}" class="form-control" placeholder="">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Tanggal Sidi</label>
                                   <input type="date" value="{{$jem->sidi}}" name="sidi" class="form-control" placeholder="">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Tanggal Nikah</label>
                                   <input type="date" name="nikah" class="form-control" placeholder="">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Pindah Tanggal </label>
                                   <input type="date" value="{{$jem->pindah_tgl}}" name="pindah_tgl" class="form-control" placeholder="">
                              </div>
                              
                              <div class="mb-3">
                                   <label class="form-label">Meninggal</label>
                                   <input type="date" value="{{$jem->meinggal}}" name="meninggal" class="form-control" placeholder="">
                              </div>
                              <div class="text-end">
                                   <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                              </div>
                              </form> 
                             @else
                             <form action="{{route('jemaat.store')}}" method="POST">
                              @csrf
                              <div class="mb-3">
                                   <label class="col-form-label col-lg-3">Nomor Induk</label>
                                   <div class="form-control-feedback">
                                        <select name="no_induk" class="form-control select">
                                             <option value="" selected disabled>Nomor Induk</option>
                                             @foreach ($kel as $k)
                                                  <option value="{{$k->id}}" {{$k->id==$jem->no_induk?"selected":""}}>{{$k->id}}</option>
                                             @endforeach             
                                        </select>
                                   </div>
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Nama </label>
                                   <input type="text" value="{{$jem->nama}}" name="nama" class="form-control" placeholder="Nama">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Tempat Lahir </label>
                                   <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                              </div>
                              
                              <div class="mb-3">
                                   <label class="form-label">Tanggal Lahir</label>
                                   <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                              </div>

                              <div class="mb-3">
                                   <label class="form-label">Tanggal Baptis </label>
                                   <input type="date" name="baptis" class="form-control" placeholder="">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Tanggal Sidi</label>
                                   <input type="date" name="sidi" class="form-control" placeholder="">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Tanggal Nikah</label>
                                   <input type="date" name="nikah" class="form-control" placeholder="">
                              </div>
                              <div class="mb-3">
                                   <label class="form-label">Pindah Tanggal </label>
                                   <input type="date" name="pindah_tgl" class="form-control" placeholder="">
                              </div>
                              
                              <div class="mb-3">
                                   <label class="form-label">Meninggal</label>
                                   <input type="date" name="meninggal" class="form-control" placeholder="">
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