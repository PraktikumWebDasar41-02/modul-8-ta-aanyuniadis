<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <form method="POST" >
    <center>
    <div class="card" style="width: 14rem;">
    
      <img class="card-img-top" src=<?php if(empty($aksi['foto'])){echo "gambar/awal.jpg";}else{echo "gambar/".$aksi['foto'];}?> alt="Card image cap">
      <div class="card-body">
        <a href="foto.php" class="btn btn-success">Edit Foto Anda</a>
      </div>
    </div>

    </center>
  <div class="form-group">
    <label for="formGroupExampleInput" class="col-form-label">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"  name="username" value=<?php echo $aksi['name'];  ?>>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"  name="password" value=<?php echo $aksi['pass'];  ?>>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value=<?php echo $aksi['email'];  ?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">change</button>
 <div class="card-body">
    <a href="dashboard.php" class="card-link">Dashboard</a>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
include 'koneksi.php';

session_start();
$id = $_SESSION['id'];
$query = mysqli_query($konek,"SELECT * FROM user WHERE id='$id'");
 while ($aksi = mysqli_fetch_array($query)) {
} 
if (isset($_POST['submit'])) {
	if (preg_match("/@/",$_POST['email'])&&preg_match("/.com/",$_POST['email'])||preg_match("/.co.id/",$_POST['email'])) {
			$email = $_POST['email'];
    }
    if (strlen($_POST['password'])<=6) {
			$password = $_POST['pasword'];
		}
	$query = mysqli_query($konek,"UPDATE user SET password='$password',email = '$email' WHERE id='$id'");
	if ($query) {
    echo "BERHASIL";
    header("Location:profil.php");
	}
}

?>