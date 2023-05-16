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
                                          <a href="index.html" class="breadcrumb-item"><i class="ph-house me-2"></i>Home</a>
                                          
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
                     
                     
                                                        <!-- Quick stats boxes -->
                                                        <div class="row">
                                                               <div class="col-lg-4">
                     
                                                                      <!-- Members online -->
                                                                      <div class="card bg-teal text-white">
                                                                             <div class="card-body">
                                                                                    <div class="d-flex">
                                                                                           <h3 class="mb-0">{{$jemaat}}</h3>
                                                                                           <span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">{{$persen}}%</span>
                                                                        </div>
                                                                        
                                                                        <div>
                                                                                           Jemaat Aktif
                                                                                           <div class="fs-sm opacity-75">{{$jemaat_aktif}} Total Jemaat</div>
                                                                                    </div>
                                                                             </div>
                     
                                                                             {{-- <div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div> --}}
                                                                      </div>
                                                                      <!-- /members online -->
                     
                                                               </div>
                     
                                                               <div class="col-lg-4">
                     
                                                                      <!-- Current server load -->
                                                                      <div class="card bg-pink text-white">
                                                                             <div class="card-body">
                                                                                    <div class="d-flex align-items-center">
                                                                                           <h3 class="mb-0">49.4%</h3>
                                                                                           <div class="dropdown d-inline-flex ms-auto">
                                                                                                  <a href="#" class="text-white d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                                                                                         <i class="ph-gear"></i>
                                                                                                  </a>
                                                                                                  <div class="dropdown-menu dropdown-menu-end">
                                                                                                         <a href="#" class="dropdown-item">
                                                                                                                <i class="ph-arrows-clockwise me-2"></i>
                                                                                                                Update data
                                                                                                         </a>
                                                                                                         <a href="#" class="dropdown-item">
                                                                                                                <i class="ph-list-dashes me-2"></i>
                                                                                                                Detailed log
                                                                                                         </a>
                                                                                                         <a href="#" class="dropdown-item">
                                                                                                                <i class="ph-chart-line me-2"></i>
                                                                                                                Statistics
                                                                                                         </a>
                                                                                                         <div class="dropdown-divider"></div>
                                                                                                         <a href="#" class="dropdown-item">
                                                                                                                <i class="ph-eraser me-2"></i>
                                                                                                                Clear list
                                                                                                         </a>
                                                                                                  </div>
                                                                               </div>
                                                                        </div>
                                                                        
                                                                        <div>
                                                                                           Total Pendaftaran
                                                                                           <div class="fs-sm opacity-75">34.6% avg</div>
                                                                                    </div>
                                                                             </div>
                     
                                                                             <div class="rounded-bottom overflow-hidden" id="server-load"></div>
                                                                      </div>
                                                                      <!-- /current server load -->
                     
                                                               </div>
                     
                                                               <div class="col-lg-4">
                     
                                                                      <!-- Today's revenue -->
                                                                      <div class="card bg-primary text-white">
                                                                             <div class="card-body">
                                                                                    <div class="d-flex align-items-center">
                                                                                           <h3 class="mb-0">Rp.18,390</h3>
                                                                                           <div class="ms-auto">
                                                                                      <a class="text-white" data-card-action="reload">
                                                                                             <i class="ph-arrows-clockwise"></i>
                                                                                      </a>
                                                                               </div>
                                                                        </div>
                                                                        
                                                                        <div>
                                                                                           Pendapatan
                                                                                           <div class="fs-sm opacity-75">Rp.37,578 avg</div>
                                                                                    </div>
                                                                             </div>
                     
                                                                             <div class="rounded-bottom overflow-hidden" id="today-revenue"></div>
                                                                      </div>
                                                                      <!-- /today's revenue -->
                     
                                                               </div>
                                                        </div>
                                                        <!-- /quick stats boxes -->

                     <!-- Dashboard content -->
                     <div class="row">
                            <div class="col-xl-12">

                                   <!-- Marketing campaigns -->
                                   <div class="card">
                                          <div class="card-header d-flex align-items-center">
                                                 <h5 class="mb-0">Laporan Keuangan</h5>
                                                 <div class="d-inline-flex ms-auto">
                                                      
                                                        <div class="dropdown d-inline-flex ms-3">
                                                               
                                                               <div class="dropdown-menu dropdown-menu-end">
                                                                     
                                                        </div>
                                            </div>
                                     </div>
                                          </div>

                                          <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                                                 <div class="d-flex align-items-center mb-3 mb-sm-0">
                                                        <div id="campaigns-donut"></div>
                                                        <div class="ms-3">
                                                               <div class="d-flex align-items-center">
                                                                      <h5 class="mb-0">38,289</h5>
                                                                      <span class="text-success ms-2">
                                                                             <i class="ph-arrow-up fs-base lh-base align-top"></i>
                                                                             (+16.2%)
                                                                      </span>
                                                               </div>
                                                               <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                                                               <span class="text-muted">May 12, 12:30 am</span>
                                                        </div>
                                                 </div>

                                                 <div class="d-flex align-items-center mb-3 mb-sm-0">
                                                        <div id="campaign-status-pie"></div>
                                                        <div class="ms-3">
                                                               <div class="d-flex align-items-center">
                                                                      <h5 class="mb-0">2,458</h5>
                                                                      <span class="text-danger ms-2">
                                                                             <i class="ph-arrow-down fs-base lh-base align-top"></i>
                                                                             (-4.9%)
                                                                      </span>
                                                               </div>
                                                               <span class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                                                               <span class="text-muted">Jun 4, 4:00 am</span>
                                                        </div>
                                                 </div>

                                                 <div>
                                                        <a href="#" class="btn btn-indigo">
                                                               <i class="ph-file-pdf me-2"></i>
                                                               View report
                                                        </a>
                                                 </div>
                                          </div>
                                          
                                          <div class="table-responsive">
                                                 <table class="table text-nowrap">
                                                        <thead>
                                                               <tr>
                                                                      <th>Campaign</th>
                                                                      <th>Client</th>
                                                                      <th>Changes</th>
                                                                      <th>Budget</th>
                                                                      <th>Status</th>
                                                                      <th class="text-center" style="width: 20px;">
                                                                             <i class="ph-dots-three"></i>
                                                                      </th>
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               <tr class="table-light">
                                                                      <td colspan="5">Today</td>
                                                                      <td class="text-end">
                                                                             <span class="progress-meter" id="today-progress" data-progress="30"></span>
                                                                      </td>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <div class="d-flex align-items-center">
                                                                                    <a href="#" class="d-block me-3">
                                                                                           <img src="../../../assets/images/brands/facebook.svg" class="rounded-circle" width="36" height="36" alt="">
                                                                                    </a>
                                                                                    <div>
                                                                                           <a href="#" class="text-body fw-semibold">Facebook</a>
                                                                                           <div class="text-muted fs-sm">
                                                                                                  <span class="d-inline-block bg-primary rounded-pill p-1 me-1"></span>
                                                                                                  02:00 - 03:00
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                                      <td><span class="text-muted">Mintlime</span></td>
                                                                      <td><span class="text-success"><i class="ph-trend-up me-2"></i> 2.43%</span></td>
                                                                      <td><h6 class="mb-0">$5,489</h6></td>
                                                                      <td><span class="badge bg-primary bg-opacity-10 text-primary">Active</span></td>
                                                                      <td class="text-center">
                                                                             <div class="dropdown">
                                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                                           <i class="ph-list"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-chart-line me-2"></i>
                                                                                                  View statement
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-pencil me-2"></i>
                                                                                                  Edit campaign
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-lock-key me-2"></i>
                                                                                                  Disable campaign
                                                                                           </a>
                                                                                           <div class="dropdown-divider"></div>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-gear me-2"></i>
                                                                                                  Settings
                                                                                           </a>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <div class="d-flex align-items-center">
                                                                                    <a href="#" class="d-block me-3">
                                                                                           <img src="../../../assets/images/brands/youtube.svg" class="rounded-circle" width="36" height="36" alt="">
                                                                                    </a>
                                                                                    <div>
                                                                                           <a href="#" class="text-body fw-semibold">Youtube videos</a>
                                                                                           <div class="text-muted fs-sm">
                                                                                                  <span class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                                                                                                  13:00 - 14:00
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                                      <td><span class="text-muted">CDsoft</span></td>
                                                                      <td><span class="text-success"><i class="ph-trend-up me-2"></i> 3.12%</span></td>
                                                                      <td><h6 class="mb-0">$2,592</h6></td>
                                                                      <td><span class="badge bg-danger bg-opacity-10 text-danger">Closed</span></td>
                                                                      <td class="text-center">
                                                                             <div class="dropdown">
                                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                                           <i class="ph-list"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-chart-line me-2"></i>
                                                                                                  View statement
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-pencil me-2"></i>
                                                                                                  Edit campaign
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-lock-key me-2"></i>
                                                                                                  Disable campaign
                                                                                           </a>
                                                                                           <div class="dropdown-divider"></div>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-gear me-2"></i>
                                                                                                  Settings
                                                                                           </a>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <div class="d-flex align-items-center">
                                                                                    <a href="#" class="d-block me-3">
                                                                                           <img src="../../../assets/images/brands/spotify.svg" class="rounded-circle" width="36" height="36" alt="">
                                                                                    </a>
                                                                                    <div>
                                                                                           <a href="#" class="text-body fw-semibold">Spotify ads</a>
                                                                                           <div class="text-muted fs-sm">
                                                                                                  <span class="d-inline-block bg-secondary rounded-pill p-1 me-1"></span>
                                                                                                  10:00 - 11:00
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                                      <td><span class="text-muted">Diligence</span></td>
                                                                      <td><span class="text-danger"><i class="ph-trend-down me-2"></i> 8.02%</span></td>
                                                                      <td><h6 class="mb-0">$1,268</h6></td>
                                                                      <td><span class="badge bg-secondary bg-opacity-10 text-secondary">On hold</span></td>
                                                                      <td class="text-center">
                                                                             <div class="dropdown">
                                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                                           <i class="ph-list"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-chart-line me-2"></i>
                                                                                                  View statement
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-pencil me-2"></i>
                                                                                                  Edit campaign
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-lock-key me-2"></i>
                                                                                                  Disable campaign
                                                                                           </a>
                                                                                           <div class="dropdown-divider"></div>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-gear me-2"></i>
                                                                                                  Settings
                                                                                           </a>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <div class="d-flex align-items-center">
                                                                                    <a href="#" class="d-block me-3">
                                                                                           <img src="../../../assets/images/brands/twitter.svg" class="rounded-circle" width="36" height="36" alt="">
                                                                                    </a>
                                                                                    <div>
                                                                                           <a href="#" class="text-body fw-semibold">Twitter ads</a>
                                                                                           <div class="text-muted fs-sm">
                                                                                                  <span class="d-inline-block bg-secondary rounded-pill p-1 me-1"></span>
                                                                                                  04:00 - 05:00
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                                      <td><span class="text-muted">Deluxe</span></td>
                                                                      <td><span class="text-success"><i class="ph-trend-up me-2"></i> 2.78%</span></td>
                                                                      <td><h6 class="mb-0">$7,467</h6></td>
                                                                      <td><span class="badge bg-secondary bg-opacity-10 text-secondary">On hold</span></td>
                                                                      <td class="text-center">
                                                                             <div class="dropdown">
                                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                                           <i class="ph-list"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-chart-line me-2"></i>
                                                                                                  View statement
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-pencil me-2"></i>
                                                                                                  Edit campaign
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-lock-key me-2"></i>
                                                                                                  Disable campaign
                                                                                           </a>
                                                                                           <div class="dropdown-divider"></div>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-gear me-2"></i>
                                                                                                  Settings
                                                                                           </a>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                               </tr>

                                                               <tr class="table-light">
                                                                      <td colspan="5">Yesterday</td>
                                                                      <td class="text-end">
                                                                             <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                                                                      </td>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <div class="d-flex align-items-center">
                                                                                    <a href="#" class="d-block me-3">
                                                                                           <img src="../../../assets/images/brands/bing.svg" class="rounded-circle" width="36" height="36" alt="">
                                                                                    </a>
                                                                                    <div>
                                                                                           <a href="#" class="text-body fw-semibold">Bing campaign</a>
                                                                                           <div class="text-muted fs-sm">
                                                                                                  <span class="d-inline-block bg-success rounded-pill p-1 me-1"></span>
                                                                                                  15:00 - 16:00
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                                      <td><span class="text-muted">Metrics</span></td>
                                                                      <td><span class="text-danger"><i class="ph-trend-down me-2"></i> 5.78%</span></td>
                                                                      <td><h6 class="mb-0">$970</h6></td>
                                                                      <td><span class="badge bg-success bg-opacity-10 text-success">Pending</span></td>
                                                                      <td class="text-center">
                                                                             <div class="dropdown">
                                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                                           <i class="ph-list"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-chart-line me-2"></i>
                                                                                                  View statement
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-pencil me-2"></i>
                                                                                                  Edit campaign
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-lock-key me-2"></i>
                                                                                                  Disable campaign
                                                                                           </a>
                                                                                           <div class="dropdown-divider"></div>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-gear me-2"></i>
                                                                                                  Settings
                                                                                           </a>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <div class="d-flex align-items-center">
                                                                                    <a href="#" class="d-block me-3">
                                                                                           <img src="../../../assets/images/brands/amazon.svg" class="rounded-circle" width="36" height="36" alt="">
                                                                                    </a>
                                                                                    <div>
                                                                                           <a href="#" class="text-body fw-semibold">Amazon ads</a>
                                                                                           <div class="text-muted fs-sm">
                                                                                                  <span class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
                                                                                                  18:00 - 19:00
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                                      <td><span class="text-muted">Blueish</span></td>
                                                                      <td><span class="text-success"><i class="ph-trend-up me-2"></i> 6.79%</span></td>
                                                                      <td><h6 class="mb-0">$1,540</h6></td>
                                                                      <td><span class="badge bg-primary bg-opacity-10 text-primary">Active</span></td>
                                                                      <td class="text-center">
                                                                             <div class="dropdown">
                                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                                           <i class="ph-list"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-chart-line me-2"></i>
                                                                                                  View statement
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-pencil me-2"></i>
                                                                                                  Edit campaign
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-lock-key me-2"></i>
                                                                                                  Disable campaign
                                                                                           </a>
                                                                                           <div class="dropdown-divider"></div>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-gear me-2"></i>
                                                                                                  Settings
                                                                                           </a>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                               </tr>
                                                               <tr>
                                                                      <td>
                                                                             <div class="d-flex align-items-center">
                                                                                    <a href="#" class="d-block me-3">
                                                                                           <img src="../../../assets/images/brands/dribbble.svg" class="rounded-circle" width="36" height="36" alt="">
                                                                                    </a>
                                                                                    <div>
                                                                                           <a href="#" class="text-body fw-semibold">Dribbble ads</a>
                                                                                           <div class="text-muted fs-sm">
                                                                                                  <span class="d-inline-block bg-primary rounded-pill p-1 me-1"></span>
                                                                                                  20:00 - 21:00
                                                                                           </div>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                                      <td><span class="text-muted">Teamable</span></td>
                                                                      <td><span class="text-danger"><i class="ph-trend-down me-2"></i> 9.83%</span></td>
                                                                      <td><h6 class="mb-0">$8,350</h6></td>
                                                                      <td><span class="badge bg-danger bg-opacity-10 text-danger">Closed</span></td>
                                                                      <td class="text-center">
                                                                             <div class="dropdown">
                                                                                    <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                                                           <i class="ph-list"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-chart-line me-2"></i>
                                                                                                  View statement
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-pencil me-2"></i>
                                                                                                  Edit campaign
                                                                                           </a>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-lock-key me-2"></i>
                                                                                                  Disable campaign
                                                                                           </a>
                                                                                           <div class="dropdown-divider"></div>
                                                                                           <a href="#" class="dropdown-item">
                                                                                                  <i class="ph-gear me-2"></i>
                                                                                                  Settings
                                                                                           </a>
                                                                                    </div>
                                                                             </div>
                                                                      </td>
                                                               </tr>
                                                        </tbody>
                                                 </table>
                                          </div>
                                   </div>
                                   <!-- /marketing campaigns -->

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