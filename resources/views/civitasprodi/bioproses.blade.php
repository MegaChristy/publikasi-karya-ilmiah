<html> </<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIKI-Institut Teknologi Del</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIKI-Institut Teknologi Del</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    
    <body>



<div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="/homecivitas" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="/FormAddKaryaAdmin" aria-expanded="true"><i class="ti-pie-chart"></i><span>Kirim Karya Ilmiah</span></a>
                            </li>
                            <li>
                                <a href="/civitaskaryailmiah" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Koleksi</span></a>
                            </li>
                            <li>
                                <a href="/civitaspenulis" aria-expanded="true"><i class="ti-pie-chart"></i><span>Penulis</span></a>
                            </li>
                            <li class="active">
                                <a href="/civitasprodi" aria-expanded="true"><i class="ti-palette"></i><span>Prodi</span></a>
                            </li>
                            <li>
                                <a href="/Tentang" aria-expanded="true"><i class="ti-slice"></i><span>Tentang</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="row">
                        <h3 class="col-12">S1 Teknik Bioproses</h3>
                        </div>
                    </div>

                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <?php
                                    $karya = \DB::select("SELECT * FROM karyailmiah where NOT Status='Requested'");
                                ?>
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>{{count($karya)}}</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have new notifications <a href="/civitaskaryailmiah">view all</a></span>
                                    <div class="nofity-list">
                                    @foreach($karya as $ky)
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <a href="/civitaskaryailmiah">
                                                <p>{{ $ky->Judul }}</p>
                                                <span>{{ $ky->Status }}</span>
                                                <span>{{ $ky->updated_at }}</span>
                                                </a>
                                            </div>
                                    @endforeach
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <ul class="breadcrumbs pull-left">
                                <li><a href="/">Home</a></li>
                                <li><span>S1 Teknik Bioproses</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="mt-5"> Daftar Karya Ilmiah</h1>

<table class = "table">
<thead class="thead-dark">
<tr>
<th scope="col"> No</th>
<th scope="col"> Judul</th>
<th scope="col"> Penulis</th>
<th scope="col"> Pembimbing</th>
<th scope="col"> Jenis</th>
<th scope="col"> Tanggal Publikasi</th>
<th scope="col"> Aksi</th>
</tr>
</thead>
<tbody> 

@foreach($karyailmiah as $ki)
<tr>
<th scope="row">{{$loop->iteration}}</th>
<td>{{$ki -> Judul}}</td>
<td>{{$ki -> Penulis}}</td>
<td>{{$ki -> Pembimbing}}</td>
<td>{{$ki -> JenisKaryaIlmiah}}</td>
<td>{{$ki -> updated_at}}</td>
<td>
<a href="{{ asset('/storage/'.$ki->File)}}" class="badge badge-primary">Lihat</a>
<a href="{{ route('downloadfile', $ki->File) }}" class="badge badge-primary">Unduh</a>
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $karyailmiah->onEachSide(1)->links() }}
</div>
</div>
</div>
      </div>

      <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                <?php
                $karyai = \DB::select("SELECT * FROM karyailmiah where Status='Requested'");
                ?>
                @foreach($karyai as $k)
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>{{ $k->Judul }}</h4>
                            <span class="time"><i class="ti-time"></i>{{ $k->created_at }}</span>
                            <span class="time">{{ $k->Status }}</span>
                        </div>
                        <p>{{ $k->Deskripsi }}</p>
                    </div>
                @endforeach
                <?php
                $karyail = \DB::select("SELECT * FROM karyailmiah where NOT Status='Requested'");
                ?>
                @foreach($karyail as $kl)
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>{{ $kl->Judul }}</h4>
                            <span class="time"><i class="ti-time"></i>{{ $kl->updated_at }}</span>
                            <span class="time">{{ $kl->Status }}</span>
                        </div>
                        <p>{{ $kl->Deskripsi }}</p>
                    </div>
                @endforeach
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <footer>
            <div class="footer-area">
                <p>© Copyright 2020. All right reserved. Template by <a href="https://colorlib.com/wp/">PSI - 04</a>.</p>
            </div>
        </footer>

    </body>
</html>

