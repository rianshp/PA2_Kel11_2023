<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ config('app.name') . ' : ' }}Data Jemaat</title>  
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">
		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />
		<!-- BOOTSTRAP CSS -->
		<link id="style" href="{{asset('assets/zanex/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('assets/zanex/style.css')}}" rel="stylesheet"/>


	</head>

	<body class="app ltr light-mode">

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">
        
				<!--app-content open-->
				<div class="main-content col-lg-11 mx-auto mt-0">
					<div class="side-app">

						<!-- CONTAINER -->
						<div class="main-container container-fluid">

							<!-- PAGE-HEADER -->
							<div class="page-header ">
								<div>
									<h1 class="page-title">Data Jemaat</h1>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Data Jemaat</li>
									</ol>
								</div>
                <div class="ms-auto pageheader-btn">
									<a href="{{url()->previous()}}" class="btn btn-primary btn-icon text-white me-2">
										<span>
										</span> Kembali
									</a>
									
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- Row -->
							<div class="row row-sm">
								<div class="">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title mx-auto">Daftar Jemaat</h3>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
													<thead>
														<tr>
															<th class="col-1">No</th>
															<th class="wd-15p border-bottom-0">Nama</th>
															<th class="wd-25p border-bottom-0">No.Induk</th>
															<th class="wd-15p border-bottom-0">Sektor</th>
															<th class="wd-20p border-bottom-0">Umur</th>
															<th class="wd-15p border-bottom-0">Tempat/Tanggal Lahir</th>
															<th class="wd-10p border-bottom-0">Status</th>
														</tr>
													</thead>
													<tbody>
														@foreach ($all as $a)
														<tr>
															<td>{{$loop->iteration}}</td>
															<td class="text-capitalize">{{$a->nama}}</td>
															<td>{{$a->no_induk}}</td>
															<td>{{$a->sektor}}</td>
															<td >{{ \Carbon\Carbon::parse($a->tgl_lahir)->age}} Tahun</td>
															<td class="text-capitalize">{{$a->tempat_lahir}} / {{ \Carbon\Carbon::parse($a->tgl_lahir)->isoFormat('D MMMM Y') }}</td>
															<td class="text-capitalize">{{$a->status}}</td>
														</tr>														    
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('assets/zanex/js/jquery.min.js')}}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{asset('assets/zanex/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/zanex/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/dataTables.min.js')}}"></script>
    <script src="{{asset('assets/zanex/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/zanex/js/table-data.js')}}"></script>
    <script src="{{asset('assets/zanex/input-mask/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/zanex/js/jquery.sparkline.min.js')}}"></script>
        <!-- CUSTOM JS -->
        <script src="{{asset('assets/zanex/js/custom.js')}}"></script>

	</body>
</html>