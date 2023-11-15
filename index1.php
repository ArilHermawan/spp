<!DOCTYPE html>
<html>
<head>
<title>Membuat Login Multi User Level Dengan PHP dan MySQLi</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Membuat Login Multi User Level Dengan PHP dan MySQLi <br/></h1>

<?php
if(isset($_GET['pesan'])){
if($_GET['pesan']=="gagal"){
echo "<div class='alert'>Username dan Password tidak sesuai !</div>"; 
}
}
?>

<div class="kotak_login">
<p class="tulisan_login">Silahkan login</p>

<form action="cek_login.php" method="post">
<label>Username</label>
<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

<label>Password</label>
<input type="password" name="password" class="form_login" placeholder="Password.." required="required">

<input type="submit" class="tombol_login" value="LOGIN">
<br/>
<br/>
<center>
<a class="link" href="https://www.malasngoding.com">kembali</a>
</center>
</form>

</div>

<?php  
include "koneksi.php";

if (isset($_POST['login'])) {
 
 
$username=$_POST['username'];
$passworf=$_POST['password'];


$kueri  = "select * from aman where username='username' and password='password'";

$aman   = $konek ->query($kueri);
$cek    = $aman -> num_rows;

if ($cek > 0) {

?>
<script type="text/javascript">
documen.location='../Arsha/index.html'
</script>


<?php  

}else{
 echo "gagal";


}
}
 ?>

</body>
</html>