<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-horizontal" action ="#" enctype="multipart/form-data">
      <img width="72" height="72" class="mb-4" alt="" src="assets/images/icon/logo.png">
      <h1 class="h3 mb-3 font-weight-normal">Info Pengguna</h1>
      <label class="sr-only" for="inputNamaDepan">Nama Depan</label>
      <label class="sr-only" for="inputNamaBelakang">Nama Belakang</label>
      <label class="sr-only" for="inputAlamat">Alamat</label>
      <label class="sr-only" for="inputEmail">Email</label>
      <label class="sr-only" for="inputNoTelp">No. Telp</label>
      <label class="sr-only" for="inputfoto">Pilih Foto</label>
      <input class="form-control" id="inputNamaDepan" autofocus="" required="" type="namadepan" placeholder="namadepan">
      <input class="form-control" id="inputNamaBelakang" autofocus="" required="" type="namabelakang" placeholder="namabelakang">
      <input class="form-control" id="inputAlamat" autofocus="" required="" type="alamat" placeholder="alamat">
      <input class="form-control" id="inputEmail" autofocus="" required="" type="email" placeholder="email">
      <input class="form-control" id="inputNoTelp" required="" type="notelp" placeholder="notelp">
      <input class="form-control" id="inputfoto" required="" type="file" placeholder="foto">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
    </form>
</body>
</html>