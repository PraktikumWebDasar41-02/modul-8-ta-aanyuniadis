<form method="POST">
  <center>
    <h2><b> REGISTRASI </b></h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"><br>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
    <div class="card-body">
    <a href="registasi.php" class="card-link">register</a>
  </div>
</center>
</form>
<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
  session_start();
  $query = mysqli_query($conn,"SELECT * FROM user");
  while ($acc = mysqli_fetch_array($query)) {
    if ($acc['username']==$_POST['username']&&$acc['password']==$_POST['password']) {
      $_SESSION['username'] = $acc['username'];
      $_SESSION['id'] = $acc['id'];
      header("Location:dashboard.php");
    }
  }
}
 ?>