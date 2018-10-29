<?php 
class oop
{
	private $username;
	private $password;
	private $email;
	private $query;
	private $conn;
	private $namadepan;
	private $namabelakang;
	private $nim;
	private $kls;
	private $hobi;
	private $genre;
	private $wisata;
	private $id;
	private $id2;

	function edit($user,$pass,$repass,$emaill)
	{
		
	include 'koneksi.php';
		
		if (!is_numeric($user)) {
			$this->username = $user;
		}
		if ($pass==$repass|| strlen($pass)<=6) {
			$this->password = $pass;
		}else{
			echo "Password anda belum terdaftar";
		}
		if (preg_match("/@/",$emaill)&&preg_match("/.com/",$emaill)||preg_match("/.co.id/",$_POST['email'])) {
			$this->email = $emaill;
		}
		if (isset($this->username)&&isset($this->password)&&isset($this->email)) {
			$this->conn = $konek;
			$this->query = mysqli_query($this->conn,"INSERT INTO user(id, username, password, email) VALUES ('','$this->username','$this->password','$this->email')");
			if (!$this->query) {
				die("INPUTAN GAGAL");
			}else{
				echo "INPUTAN BERHASIL";
				header("Location:index.php");
			}
		}
	
	}

	function editbaru($namadpn,$namablkg,$nim,$kls,$hobi,$genre,$tw)
	{
		include 'koneksi.php';
		session_start();
		$this->id= $_SESSION['id'];
		if (strlen($nim)==10&&is_numeric($nim)) {
			$this->nim = $nim;
		}
		if (!is_numeric($namadpn)) {
			$this->namadepan = $namadpn;
		}
		if (!is_numeric($namablkg)) {
			$this->belakang = $namablkg;
		}
		$this->kls = $kelas;
		if (!is_numeric($hobi)) {
			$this->hobi = $hobi;
		}
		$this->genre = implode(", ",$genre);
		$this->wisata = implode(", ",$wisata);
		if (isset($this->nim)&&isset($this->namadepan)&&isset($this->namabelakang)) {
			$this->conn = $konek;
			$this->query = mysqli_query($this->conn,"INSERT INTO data(namadepan, namabelakang, nim, kelas, hobi, genre, wisata, id)
			 VALUES ('$this->namadepan','$this->namabelakang','$this->nim','$this->kls','$this->hobi','$this->genre','$this->wisata','$this->id')");
			if (!$this->que) {
				die("INPUTAN GAGAL");
			}else{
				echo "INPUTAN BERHASIL";
				header("Location:dashboard.php");
			}
		}
	}

	function delete($dlt)
	{
		include 'koneksi.php';
		$this->id2 = $dlt;
		$this->conn = $konek;
			$this->query = mysqli_query($this->conn,"DELETE FROM data WHERE nim ='$this->id2'");
			if (!$this->query) {
				die("INPUTAN GAGAL");
			}else{
				echo "INPUTAN BERHASIL";
				header("Location:dashboard.php");
			}
	}
}
$hasil = new oop();
if (isset($_POST['send'])) {
$hasil->tambah1($_POST['user'],$_POST['pass'],$_POST['repass'],$_POST['email']);
}
if (isset($_POST['simpan'])) {
$hasil->tambahnew($_POST['namadpn'],$_POST['namablkg'],$_POST['nim'],$_POST['kelas'],$_POST['hobi'],$_POST['genre'],$_POST['wisata']);
}
if (isset($_GET['nim'])) {
$hasil->hapus($_GET['nim']);
}
 ?>