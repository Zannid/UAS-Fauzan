<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

    <title>UAS</title>
  </head>
  <body>
    <form action="hasil.php" method="post">
   <center> <img src="yys.png" alt="" width="15%"></center>
   <br>
   <center><h2><p>PENGGAJIHAN</p></h2></center>
   <center><h2><p>GURU/KARYAWAN YAYASAN ASSALAAM</p></h2></center>
   
    <div class="container p-2" width="50%" >
      <div class="row" style="width: 35rem;">
        <div class="col-md-8-mxauto">
         
  <div class="card shadow-lg p-2 mb-5 bg-body rounded" width="50%" style="left: 205px; ">
  <div class="card-header bg-primary text-white">
    <center><b>Data Penggajihan</b></center>
    
  </div>
  <div class="card-body">
    No
    <div class="input-group mb-3">
  <input type="text" class="form-control" name="no" placeholder="No" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>

Nama
<div class="input-group mb-3">
  <input type="text" class="form-control" name="nama" placeholder="Nama" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
Unit Pendidikan

<div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect04" placeholder="" name="unit" aria-label="Example select with button addon">
  <option disable selected>Pilih Unit Pendidikan</option>
    <option value="SD">SD</option>
    <option value="SMP">SMP</option>
    <option value="SMK">SMK</option>
  </select>
</div>

Tanggal Gaji
<div class="input-group mb-3">
  <input type="date" class="form-control" name="tgl" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>

<div class="container">
  <div class="row">
    <div class="col"><h3 style="color: green;" align="center">Gaji</h3></div>
    <div class="col"><h3  style="color: red;" align="center">Potongan</h3></div>
  </div>
  <div class="row">
    <div class="col-md-6">
      Jabatan
      <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jabatan"  placeholder="">
  <option disable selected>Pilih Jabatan</option>
    <option value="Kepala Sekolah">Kepala Sekolah</option>
    <option value="Wakasek">Wakasek</option>
    <option value="Guru">Guru</option>
    <option value="OB">Karyawan</option>
  </select>
</div>
    </div>
    <div class="col">
      BPJS
    <div class="input-group mb-3">
  <input type="text" class="form-control" name="bpjs" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      Lama Kerja
      <div class="input-group mb-3">
  <input type="text" class="form-control" name="kerja" placeholder="Lama Kerja" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
    </div>
    <div class="col">
      Pinjaman
      <div class="input-group mb-3">
  <input type="text" class="form-control" name="pinjaman" placeholder="Pinjaman" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
    </div>
  </div>
  <div class="row">
    <div class="col">
    Status Kerja
    <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect04" name="status"  placeholder="" aria-label="Example select with button addon">
  <option disable selected>Pilih Status Kerja</option>
    <option value="Kontrak">Kontrak</option>
    <option value="Tetap">Tetap</option>
   
  </select>
</div>
  </div>
  <div class="col">
    Tabungan
    <div class="input-group mb-3">
  <input type="text" class="form-control" name="tabungan" placeholder="Tabungan" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
  </div>
</div>
<div class="row">
  <div class="col-6"></div>
  <div class="col-6">
    Lainnya
    <div class="input-group">
  <input type="text" class="form-control" name="lain" placeholder="Lainnya" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
  </div>
</div>
</div>
<br>
<center><button type="submit" class="btn btn-primary" name="proses">Proses</button></center>
    
  </div>
</div>
 
</div>
      </div>
</div>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>