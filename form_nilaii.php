<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
               
  <div class="container">    
    <form class="form-horizontal p-5 shadow" style="background-color:#F0FFFF;" method="GET" action="form_nilaii.php">

      <div class="text-center">
        <h3 class="mb-5 text-primary text-mg">Input Nilai Mahasiswa</h3>
      </div>
      <!------------>
        <div class="form-group row">
          <label for="namapanjang" class="col-sm-3 col-form-label"><b>Nama Panjang</b></label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama_panjang" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label"><b>NIM</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nim" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="matakuliah" class="col-sm-3 col-form-label"><b>Mata Kuliah</b></label>
          <div class="col-sm-7">
            <select name="mata_kuliah" class="form-control">
              <option value="?">Lainnya</option>
              <option value="UI">UI/UX</option>
              <option value="jarkom">Jaringan Komputer</option>
              <option value="statis">Statistik</option>
            </select>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nilaiuts" class="col-sm-3 col-form-label"><b>Nilai UTS</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nilai_uts" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
            <label for="nilaiuas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-5">
              <input type="number" class="form-control " name="nilai_uas" required>
            </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nilaitugas" class="col-sm-3 col-form-label"><b>Nilai Tugas</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nilai_tugas" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="text-center">
          <input class="btn btn-primary" type="submit" value="Simpan" name="proses__"/>
        </div>
    </form>
  </div>

<?php

  $nama_panjang = $_GET['nama_panjang'];
  $nim = $_GET['nim'];
  $mata_kuliah = $_GET['mata_kuliah'];
  $nilai_uts = $_GET['nilai_uts'];
  $nilai_uas = $_GET['nilai_uas'];
  $nilai_tugas = $_GET['nilai_tugas'];

  echo '<br/>Nama Panjang : '.$nama_panjang;
  echo '<br/>NIM : '.$nim;
  echo '<br/>Mata Kuliah : '.$mata_kuliah;
  echo '<br/>Nilai UTS : '.$nilai_uts;
  echo '<br/>Nilai UAS : '.$nilai_uas;
  echo '<br/>Nilai TUGAS : '.$nilai_tugas;


?>

</body>
</html>