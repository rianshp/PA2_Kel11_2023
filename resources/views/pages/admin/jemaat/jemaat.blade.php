@extends('layouts.admin.master')
@section('title', 'Jemaat')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assetss/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assetss/demo/demo_configurator.js')}}"></script>
<script src="{{asset('assetss/js/app.js')}}"></script>
<script src="{{asset('assetss/js/bootstrap/bootstrap.bundle.min.jss')}}"></script>
<link href="{{asset('assetss/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assetss/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assetss/css/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
<script src="{{asset('assetss/demo/pages/datatables_basic.js')}}"></script>     
<script src="{{asset('assetss/js/vendor/tables/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assetss/js/vendor/tables/datatables/extensions/fixed_columns.min.js')}}"></script>
<script src="{{asset('assetss/demo/pages/datatables_extension_fixed_columns.js')}}"></script>
@section('content')
<!-- Main content -->
{{-- <div class="content-wrapper"> --}}
     <div class="page-content">


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

					<div class="card">
						<div class="card-header row">
							<h5 class="col mt-1 mb-0 text-start">Data Jemaat</h5>
							<div class="col offset-lg-5 text-end ">
								<a href="#" class="btn btn-success">
									  <i class="ph-file-pdf me-2"></i>
									  Lihat Laporan
								</a>
						   	</div>
							   @hasrole('admin')
							   <div class="col mb-0 text-end">
								   <a href="{{url('admin/jemaat/jemaat/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Jemaat
								   </a>
							    </div>
							   @else
							   <div class="col mb-0 text-end">
								   <a href="{{url('sek/jemaat/jemaat/create')}}" class="btn btn-info text-nowrap">
									  <i class="ph-plus me-2"></i>
									  Tambah Jemaat
								   </a>
							    </div>
							   @endhasrole
						</div>

						<table class="table datatable-fixed-right">
							<thead>
								<tr>
									<th class="border-bottom-1">No</th>
									<th class="col-1 border-bottom-1">No.Induk</th>
									<th class="wd-15p border-bottom-1">Nama</th>
                                             <th class="wd-5p col-1 border-bottom-1">Umur</th>									
                                             <th class="wd-5p col-1 border-bottom-1">Tempat / Tanggal Lahir</th>									
									<th class="wd-20p border-bottom-1">Tanggal Baptis</th>
                                             <th class="wd-20p border-bottom-1">Tanggal Sidi</th>
									<th class="wd-15p border-bottom-1">Tanggal Nikah</th>
                                             <th class="wd-15p border-bottom-1">Meninggal</th>
									<th class="wd-15p border-bottom-1">Pindah Tanggal</th>
									<th class="wd-15p border-bottom-1">Status</th>
                                             <th class="wd-10p border-bottom-1" style="width: 10px">Actions</th>
								</tr>
							</thead>
							<tbody>
                                        @foreach ($jem as $k)
								<tr>
									<td class="">{{$i++}}</td>
									<td class="col-1">{{$k->no_induk}}</td>
									<td class="text-capitalize">{{$k->nama}}</td>
                                             <td class="text-wrap col-1 text-capitalize">{{ \Carbon\Carbon::parse($k->tgl_lahir)->age}} Tahun</td>									
									<td class="text-wrap col-1 text-capitalize">{{$k->tempat_lahir}} , {{ \Carbon\Carbon::parse($k->tgl_lahir)->isoFormat('D MMMM Y') }}</td>
                                             @if($k->pindah_tgl == Null)
                                             <td>--</td>                                             
                                             @else
                                             <td class="text-capitalize">{{ \Carbon\Carbon::parse($k->pindah_tgl)->isoFormat('D MMMM Y') }}</td>                                             
                                             @endif
                                             @if($k->pindah_ke == Null)
                                             <td>--</td>                                             
                                             @else                                             
									<td class="text-capitalize">{{$k->pindah_ke}}</td>
                                             @endif
									@if($k->pindah_tgl == Null)
                                             <td>--</td>                                             
                                             @else
                                             <td class="text-capitalize">{{ \Carbon\Carbon::parse($k->pindah_tgl)->isoFormat('D MMMM Y') }}</td>                                             
                                             @endif
                                             @if($k->pindah_ke == Null)
                                             <td>--</td>                                             
                                             @else                                             
									<td class="text-capitalize">{{$k->pindah_ke}}</td>
                                             @endif                                                                                          
									@if($k->pindah_ke == Null)
                                             <td>--</td>                                             
                                             @else                                             
									<td class="text-capitalize">{{$k->pindah_ke}}</td>
                                             @endif    
									@if ($k->status == 'aktif')									
									<td><span class="badge bg-success bg-opacity-10 text-success">Aktif</span></td>
									@else
									<td><span class="badge bg-danger bg-opacity-10 text-danger">Non-Aktif</span></td>
									@endif
                                             <td>
                                                  <div class="d-inline-flex ">
											<form action="{{route('jemaat.destroy', $k->id)}}" method="POST">
												@csrf
												@method('DELETE')
												<a type="button" method="GET" href="{{route('jemaat.edit', $k->id)}}" data-bs-popup="tooltip" title="Edit" class="btn btn-warning btn-icon" style="margin-bottom: -1rem">
													<i class="ph-note-pencil"></i>
												</a>
												<button type="submit" href="" data-bs-popup="tooltip" title="Delete" class="btn btn-danger btn-icon" style="margin-bottom: -1rem">
													<i class="ph-trash"></i>
												</button>
											</form>
										</div>     
                                             </td>									
								</tr>                                            
                                        @endforeach
								
							</tbody>
						</table>
					</div>
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
		<!-- /main content -->

	</div>

{{-- </div> --}}
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