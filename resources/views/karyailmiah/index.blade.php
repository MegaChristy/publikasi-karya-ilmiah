<html> </<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
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

    <div class="container">
<div class="row">
<div class="col-10">
<h1 class="mt-5"> Daftar Karya Ilmiah</h1>

<table class = "table">
<thead class="thead-dark">
<tr>
<th scope="col"> No</th>
<th scope="col"> Publisher</th>
<th scope="col"> Penulis</th>
<th scope="col"> Tanggal Publikasi</th>
<th scope="col"> Judul</th>
<th scope="col"> Aksi</th>
</tr>
</thead>
<tbody> 

@foreach($karyailmiah as $ki)
<tr>
<th scope="row">{{$loop->iteration}}</th>
<td>{{$ki -> Publisher}}</td>
<td>{{$ki -> Penulis}}</td>
<td>{{$ki -> Tanggal_publikasi}}</td>
<td>{{$ki -> Judul}}</td>
<td>
<a href="" class="badge badge-primary">Lihat</a> 
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>

    </body>
</html>

