<?php
  include'koneksi.php';
?>

<form method="POST">
  <center>
    <h2><b> NEW DATA</b></h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">NIM</label>
    <input type="text" name="nim">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Kelas</label>
  <select class="custom-select custom-select-lg mb-3" name="kelas">
  <option selected>Kelas</option>
  <option value="D3M1-41-01">D3M1-41-01</option>
  <option value="D3M1-41-02">D3M1-41-02</option>
  <option value="D3M1-41-03">D3M1-41-03</option>
  <option value="D3M1-41-04">D3M1-41-04</option>
  </select>
</div>
  <div class="form-group">
  <label for="exampleInputEmail1">Hobi</label>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="hobi"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Membaca</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="hobi"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Menulis</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="hobi"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Menari</label>
  </div>
</div>
</div>
  <div class="form-group">
  <label for="exampleInputEmail1">Genre Film</label>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="genre"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Horror</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="genre"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Anime</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="genre"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Action</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="genre"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Drama</label>
  </div>
</div>
<div class="form-group">
  <label for="exampleInputEmail1">Tempat Wisata</label>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="wisata"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Bali</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="wisata"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Tanjung Selor</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="wisata"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Jakarta</label>
  </div>
  <div class="custom-control custom-checkbox">
  <input type="checkbox" name="wisata"class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Lombok</label>
  </div>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir">
  </div><br> <br>
  <button type="submit" class="btn btn-primary">Submit</button><br><br>
</center>
</form>
<?php
  session_start();
  if (isset($_POST['submit'])) {
      $nama=$_POST['nama'];
      $nim=$_POST['nim'];
      $kelas=$_POST['kelas'];
      $hobi=$_POST['hobi'];
      $genre=$_POST['genre'];
      $wisata=$_POST['wisata']; 
    session_destroy();
    header("Location:dashbroad.php");
  }