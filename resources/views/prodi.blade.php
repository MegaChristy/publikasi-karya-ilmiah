<!doctype html>
<html class="no-js" lang="en">

<head>
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
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
                                <a href="/" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="/karyailmiah" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Koleksi</span></a>
                            </li>
                            <li>
                                <a href="/penulis" aria-expanded="true"><i class="ti-pie-chart"></i><span>Penulis</span></a>
                            </li>
                            <li class="active">
                                <a href="/prodi" aria-expanded="true"><i class="ti-palette"></i><span>Prodi</span></a>
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
                            <h3 class="col-12"> Program Studi</h3>
                        </div>
                    </div>

                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            
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
                                <li><span>Program Studi</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <div class="text-right">
                                <a href="login" style="color:white">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
    <body>
        <div class="head">
			<header>
                <br>
                <br>
                </header>
			<section class="courses">                    
				<article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/si.png" alt="" width="200" height="200">
                    </div>
					<div class="lts-content">
                        <span> S1 Sistem Informasi</span>
                        <p>sistem informasi adalah program studi yang dirancang untuk memenuhi kebutuhan terhadap tenaga-tenaga 
                        <p>muda yang terampil dan profesional, terutama terkait dengan pengembangan, pemanfaatan, dan pengelolaan 
                        <p>Sistem Informasi/Teknologi Informasi dalam suatu organisasi.Kurikulum Program Studi Sistem Informasi 
                        <P>IT Del mengacu kepada beberapa kurikulum Sarjana Sistem Informasi di Indonesia maupun Internasional.</p>
                        <a href="{{route('visitorprodi.s1si')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    
                    </div>
				</article><br><br>
                <article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/te.png" alt="" width="250" height="200">
                    </div>
					<div class="lts-content">
                        <span> S1 Teknik Elektro</span>
                        <p>Program Studi Teknik Elektro berupaya untuk meningkatkan layanan yang baik kepada mahasiswa serta 
                        <p>mampu menjawab keperluan industri melalui lulusan tenaga terdidik dan juga terampil di bidangnya. 
                        <P>Visi Program Studi Teknik Elektro adalah Mewujudkan program pendidikan Teknik Elektro yang unggul 
                        <P>dan penyelenggaraan penelitian bidang Teknik Elektro yang bertaraf nasional pada tahun 2024</p>
                        <a href="{{route('visitorprodi.s1te')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    </div>
				</article><br>  
                <article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/informatika.png" alt="" width="250" height="200">
                    </div>
					<div class="lts-content">
                        <span> S1 Informatika</span>
                        <p>Program Studi S1 Informatika (PSIF) di Institut Teknologi Del (IT Del) memiliki cakupan bidang ilmu 
                        <p>(body of knowledge) meliputi area ilmu komputer (Computer Science), rekayasa perangkat lunak keamanan 
                        <p>siber (Cybersecurity), dan ilmu data (Data Science).Lulusan dari PSIF dipersiapkan untuk dapat memiliki 
                        <p>kemampuan analisis persoalan yang terkait bidang computer science dan pengembangan perangkat lunak mulai 
                        <p>dari yang sederhana yang sampai yang kompleks ataupun berskala besar.</p>
                        <a href="{{route('visitorprodi.s1info')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    </div>
				</article><br><br>
                <article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/trpl.jpeg" alt="" width="250" height="200">
                    </div>
					<div class="lts-content">
                        <span> D4 Teknologi Rekayasa Perangkat Lunak </span>
                        <p>Visi Program Studi Teknologi Rekayasa Perangkat Lunak Program Sarjana Terapan sebagai batu loncatan 
                        <p>menuju masa depan Teknologi Informasi yang mengintegrasikan dunia pendidikan dengan kebutuhan usaha 
                        <p>akan tenaga profesional informatika yang mampu bersaing secara global.</p>
                        <a href="{{route('visitorprodi.d4trpl')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    </div>
				</article><br><br> 
                <article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/himatif.jpeg" alt="" width="250" height="200">
                    </div>
					<div class="lts-content">
                        <span> D3 Teknologi Informasi</span>
                        <p>Program Studi Teknologi Informasi Diploma Tiga  mempunyai sasaran untuk menyelenggarakan proses 
                        <p>pembelajaran yang dapat menumbuhkan-kembangkan daya nalar, daya cipta, daya kreasi dan keterampilan 
                        <p>yang tinggi, yang dapat dikomunikasikan dan diaplikasikan pada bidang kehidupan.</p>
                        <a href="{{route('visitorprodi.diplomati')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    </div>
				</article><br><br>  
                <article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/tk.png" alt="" width="250" height="200">
                    </div>
					<div class="lts-content">
                        <span> D3 Teknologi Komputer</span>
                        <p>Program Studi Teknik Komputer adalah salah satu program studi yang diselenggarakan Institut Teknologi 
                        <p>Del yang terletak di daerah pedesaan Tobasa, yang membuka peluang bagi siswa berprestasi untuk 
                        <p>mengenyam pendidikan dengan mutu yang tidak kalah dengan pendidikan bermutu bagus yang 
                        <p>diselenggarakan di kota besar.</p>
                        <a href="{{route('visitorprodi.d3tk')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    </div>
				</article><br><br>
                <article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/mr.jpg" alt="" width="250" height="200">
                    </div>
					<div class="lts-content">
                        <span> S1 Manajemen Rekayasa</span>
                        <p>Manajemen Rekayasa (Engineering Management) adalah penggabungan dari keilmuan teknik/rekayasa (engineering) 
                        <p>dengan ilmu manajemen yang diaplikasikan untuk menyelesaikan persoalan-persoalan dalam suatu sistem kompleks.
                        <p>Aspek keilmuan teknik (engineering) dari Manajemen Rekayasa terlihat melalui  penerapan matematika dan ilmu 
                        <p>pengetahuan alam yang diperoleh melalui pembelajaran, pengalaman, dan praktek empiris untuk menemukan 
                        <p>cara-cara yang optimal dalam memanfaatkan material dan sumber daya lain dalam mengembangkan teknologi.</p>
                        <a href="{{route('visitorprodi.s1mr')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    </div>
				</article><br><br>
                <article>
                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/images/icon/bp.jpg" alt="" width="250" height="200">
                    </div>
					<div class="lts-content">
                        <span> S1 Teknik Bioproses</span>
                        <p>Program studi Sarjana Teknik Bioproses memiliki visi yaitu menjadi program studi yang unggul secara nasional 
                        <p>dan internasional dalam bidang pendidikan, penelitian, pengembangan dan penerapan ilmu dan teknologi, serta 
                        <p>pengabdian kepada masyarakat.</p>
                        <a href="{{route('visitorprodi.s1bp')}}"><button button style=" height: 40px; width: 100px; background-color:#1E90FF;" class="btn btn-primary right-block" >View</button></a>
                        
                    </div>
				</article>                                                  
			</section>
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
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
    <!-- offset area end -->
    <!-- jquery latest version -->
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
     <!-- footer area start-->
     </br>
       <footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #3c8dbc;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us!</h6>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Sistem Informasi Karya Ilmiah Institut Teknologi Del</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p> Sistem Informasi Karya Ilmiah Institut Teknologi Del (SIKI IT Del) merupakan salah satu sistem 
        informasi kampus yang memiliki tujuan untuk melestarikan aset intelektual yang dihasilkan oleh civitas institut serta memastikan aset tersebut dapat diakses dengan mudah.</p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Location</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a>Institut Teknologi Del</a>
        </p>
        <p>
          <a>JL. Sisimangaraja, Sitoluama</a>
        </p>
        <p>
          <a>Laguboti, Toba Samosir</a>
        </p>
        <p>
          <a>Sumatera Utara, Indonesia</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact Information</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a>Kode Pos: 22381</a>
        </p>
        <p>
          <a>Telp : +62632331234</a>
        </p>
        <p>
          <a>Fax  :  +62632331116</a>
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">About</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
           <li><i class="icofont-rounded-right"></i> <strong>Email Us:</strong> <br> info@del.ac.id </li> <br>
        <p>
           <li><i class="icofont-rounded-right"></i> <strong>Learn more about IT Del:</strong><p><a  href="https://www.del.ac.id/?lang=en">Detail</a></p> </li>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> PSI - 04</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>

</html>

   

