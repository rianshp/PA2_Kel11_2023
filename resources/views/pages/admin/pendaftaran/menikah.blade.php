@extends('layouts.admin.master')
@section('title', 'Tardidi')
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
								<span href="#" class="breadcrumb-item">Pendaftaran</span>
								<span class="breadcrumb-item active">Data Tardidi</span>
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

					<!-- Basic datatable -->
					<div class="card">
						<div class="row card-header">
							<h5 class="col mt-1 mb-0 text-start">Data Tardidi</h5>
							<div class="col offset-lg-4 text-end ">
							
						   	</div>
						</div>

						<table class="table datatable-fixed-right">
							<thead>
								<tr>
									<th>No</th>
									<th>No Surat</th>
									<th class=" w-15" style="">Pria</th>
									<th>Wanita</th>
									<th>Wali Pria</th>
									<th>Wali Wanita</th>	
									<th>Tanggal</th>
									<th>Guru Jemaat</th>					
									<th>Pendeta</th>								
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($menikah as $item)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td class="text-capitalize">{{$item->no_surat}}</td>
									<td class="text-capitalize">{{$item->pria}}</td>
									<td class="text-capitalize">{{$item->wanita}}</td>
									<td class="text-capitalize">{{$item->wali_pria}}</td>
									<td class="text-capitalize">{{$item->wali_wanita}}</td>
									<td class="text-capitalize">{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM Y') }}</td>
									<td class="text-capitalize">{{$item->pendeta}}</td>
									<td class="text-capitalize">{{$item->guru_jemaat}}</td>
									<td class="text-center">
										<div class="d-inline-flex ">
											@if (Auth::user()->hasrole('admin'))
											<form action="{{route('admin.menikah.destroy', $item->id)}}" method="POST">
											@else
											<form action="{{route('sek.menikah.destroy', $item->id)}}" method="POST">												
											@endif
												@csrf
												@method('DELETE')
												@if(is_null($item->no_surat) || is_null($item->pria) || is_null($item->wanita) || is_null($item->wali_pria) || is_null($item->wali_wanita) || is_null($item->tanggal) || is_null($item->lokasi) || is_null($item->nats) || is_null($item->pendeta) || is_null($item->guru_jemaat))
												<!-- Tampilkan pesan atau elemen HTML jika salah satu kolom bernilai null -->
												@else
												<!-- Tampilkan button jika semua kolom tidak bernilai null -->
												<a type="button" method="GET" href="{{ route('menikah_pdf', $item->id) }}" data-bs-popup="tooltip" title="Unduh" class="btn btn-secondary btn-icon" style="margin-bottom: -1rem">
													<i class="ph-file-pdf"></i>
												</a>
												@endif
												@if (Auth::user()->hasrole('admin'))
												<a type="button" method="GET" href="{{route('admin.menikah.edit', $item->id)}}" data-bs-popup="tooltip" title="Edit" class="btn btn-warning btn-icon" style="margin-bottom: -1rem">
													<i class="ph-note-pencil"></i>
												</a>
												@else
												<a type="button" method="GET" href="{{route('sek.menikah.edit', $item->id)}}" data-bs-popup="tooltip" title="Edit" class="btn btn-warning btn-icon" style="margin-bottom: -1rem">
													<i class="ph-note-pencil"></i>
												</a>													
												@endif
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
					<!-- /basic datatable -->
				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-sm navbar-footer border-top">
					<div class="container-fluid">
						<span>&copy; 2023 GKPI Pearaja Tarutung</span>
						
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
@section('custom_js')
<script type="text/javascript">
     @if(session()->has('success'))
		Swal.fire(
			'Berhasil!',
			'{{session('success')}}',
			'success'
		)
	@endif
	@if(session()->has('error'))
		Swal.fire(
			'Gagal!',
			'{{session('error')}}',
			'error'
		)
	@endif
	@if(session()->has('sdelete'))
		Swal.fire(
			'Berhasil!',
			'{{session('sdelete')}}',
			'success'
		)
	@endif
</script>
@endsection