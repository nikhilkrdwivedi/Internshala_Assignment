<?php
 include '../DataBase/DB_Connection.php';
session_start();
$conn=OpenCon();
if(!isset($_SESSION["email"])){
	echo "<script>
window.location.href='../index.php';
alert('unauthrise access');
</script>";
}
?>


<?php 
include '../Utility/CSS/Head.php';
include 'Navbar.php';
?>
<div class="container">
	<h3 class="text-center">Your Applications Status</h3>
</div>
	<?php 
		include '../Utility/Other/Footer.php';
		include '../Utility/JS/Bottom.php';
		?>
