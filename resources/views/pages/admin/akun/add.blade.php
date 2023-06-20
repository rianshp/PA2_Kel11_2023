@extends('layouts.admin.master')
@section('title', 'Dashboard')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
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
                                          <a href="{{url('admin/akun/akun')}}" class="breadcrumb-item">Akun</a>
                                          @else
                                          <a href="{{url('sek/')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
                                          <a href="{{url('sek/akun/akun')}}" class="breadcrumb-item">Akun</a>
                                          @endhasrole
                                          <span class="breadcrumb-item active">Daftar Akun</span>
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
                              <h5 class="mb-0">Tambah Akun</h5>
                         </div>                        

                         <div class="card-body border-top">
                              <form action="{{route('admin.akun.store')}}" method="POST">
                                  @csrf
							<div class="mb-3">
								<label class="form-label">Fullname</label>
								<div class="form-control-feedback form-control-feedback-start">
									<input type="text" class="form-control @error('fullname') is-invalid @enderror " name="fullname" placeholder="Fullname">
									<div class="form-control-feedback-icon">
										<i class="ph-identification-card text-muted"></i>
									</div>
                                                               @error('fullname')                                                                                                                 
                                                               <div class="invalid-feedback">{{$message}}</div>
                                                                      {{-- <script>
                                                                      // Swal.fire(
                                                                      //        'Gagal!',
                                                                      //        'Silahkan input Fullname!',
                                                                      //        'error'
                                                                      // )
                                                                      // </script> --}}
                                                               @enderror
								</div>
								
							</div>

							<div class="mb-3">
								<label class="form-label">Username</label>
								<div class="form-control-feedback form-control-feedback-start">
									<input type="text" class="form-control @error('username') is-invalid @enderror " name="username" placeholder="Username">
									<div class="form-control-feedback-icon">
										<i class="ph-user-circle text-muted"></i>
									</div>
                                                               @error('username')   
                                                               <div class="invalid-feedback">{{$message}}</div>                                                                                                              
                                                                      {{-- <script>
                                                                      Swal.fire(
                                                                             'Gagal!',
                                                                             'Silahkan input Username!',
                                                                             'error'
                                                                      )
                                                                      </script> --}}
                                                               @enderror
								</div>
								
							</div>

							<div class="mb-3">
								<label class="form-label">Password</label>
								<div class="form-control-feedback form-control-feedback-start">
									<input type="password" class="form-control @error('password') is-invalid @enderror " name="password" placeholder="•••••••••••">
									<div class="form-control-feedback-icon">
										<i class="ph-lock text-muted"></i>
									</div>
                                                               @error('password')                 
                                                               <div class="invalid-feedback">{{$message}}</div>                                                                                                
                                                                      {{-- <script>
                                                                      Swal.fire(
                                                                             'Gagal!',
                                                                             'Silahkan input Password!',
                                                                             'error'
                                                                      )
                                                                      </script> --}}
                                                               @enderror
								</div>
							</div>
                                                 

                                 
                                   <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Tambah Akun <i class="ph-paper-plane-tilt ms-2"></i></button>
                                   </div>
                              </form>
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
@section('custom_js')
<script>
       @if(session()->has('success'))
       toastr.options = {
           "closeButton": true
       }
       toastr.success("{{ session()->get('success') }}")
       @endif
       @if(session()->has('error'))
		Swal.fire(
			'Gagal!',
			'{{session('error')}}',
			'error'
		)
	@endif
</script>
@endsection