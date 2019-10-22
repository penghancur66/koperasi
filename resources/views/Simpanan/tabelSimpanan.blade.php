<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koperasi Kelompok 7</title>

 <!-- Bootstrap Core CSS -->
 <link href="{{URL::asset('master/css/bootstrap.min.css') }}" rel="stylesheet">
 
     <!-- MetisMenu CSS -->
     <link href="{{URL::asset('master/css/metisMenu.min.css') }}" rel="stylesheet">
 
     <!-- Timeline CSS -->
     <link href="{{URL::asset('master/css/timeline.css') }}" rel="stylesheet">
 
     <!-- Custom CSS -->
     <link href="{{URL::asset('master/css/startmin.css')}}" rel="stylesheet">
 
     <!-- Morris Charts CSS -->
     <link href="master/css/morris.css" rel="stylesheet">
 
     <!-- Custom Fonts -->
     <link href="master/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">PROGNET</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Akun <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <center>
                        <h4>KELOMPOK 7</h4>
                        </center>
                    </li>
                    <li>
                        <a href="/dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/anggota">Daftar Nasabah <span class="fa arrow"></a>
                            </li>
                            <li>
                                <a href="/admin">Daftar Pegawai <span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="/bungaSimpanan">Bunga <span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="/jenis">Jenis Transaksi <span class="fa arrow"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Master Transaksi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/showMember">Simpanan dan Penarikan<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="/simpanan/show">Riwayat Transaksi<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="/perhitunganBunga">Perhitungan Bunga <span class="fa arrow"></span></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Master Report<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li>
                        <a href="/reportTahunan">Laporan Tahunan<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="/reportBulanan">Laporan Bulanan<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="/reportMingguan">Laporan Mingguan<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="/reportHarian">Laporan Harian<span class="fa arrow"></span></a>
                    </li>
                            
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">KOPERASI SIMPAN PINJAM</h1>
                </div>
            </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Riwayat Transaksi</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <br>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>No Anggota</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Jenis Transaksi</th>
                          <th>Nominal Transaksi</th>
                          <th>ID Pegawai</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      @for ($i = 1; $i <= sizeof($simpanan); $i++)
                        <tr>
                          <td>{{ $i }}</td>
                          <td>{{ $simpanan[$i-1]->ambil_member->no_anggota }}</td>
                          <td>{{ $simpanan[$i-1]->ambil_member->nama}}</td>
                          <td>{{ $simpanan[$i-1]->tanggal }}</td>
                          <td> @if($simpanan[$i-1]->jenis_transaksi===1)
                              Simpanan
                              @elseif ($simpanan[$i-1]->jenis_transaksi===2)
                              Penarikan
                              @else ($simpanan[$i-1]->jenis_transaksi===3)
                              Bunga
                              @endif</td>
                          <td>{{ $simpanan[$i-1]->nominal_transaksi }}</td>
                          <td>{{ $simpanan[$i-1]->id_user }}</td>
                          @if($simpanan[$i-1]->jenis_transaksi===2 || $simpanan[$i-1]->jenis_transaksi===1)
                          
                          @elseif($simpanan[$i-1]->jenis_transaksi===3)
                            <td></td>
                            <td></td>
                          @endif
                        </tr>
                        @endfor
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
          <!-- end: content -->
               <!-- jQuery -->
<script src="{{URL::asset('master/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('master/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{URL::asset('master/js/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('master/js/startmin.js') }}"></script>
   
   
</body>
</html>
