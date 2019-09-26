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
	<br>
	<h4 style="font-weight: bold;">Safety Tips For Applicants</h4>
	<p style="font-size: 14px;">It is our endeavor to provide all our users with a safe and hassle free experience on Internshala. Accordingly, we would like to make applicants aware of following safety tips for them.</p><p style="font-size: 14px;font-weight: bold;">Internshala does NOT allow employers to:</p>
	<ol style="font-size: 14px;">
		<li>Offer unpaid internships, unless explicitly mentioned so in the internship post.</li>
<li>Post training program and any such program where applicants are expected to pay a security deposit or an admission fee.</li>
<li>To charge money in any form (including test fee, security deposit, documentation fee etc.) from the applicants for offering internship. This is strictly prohibited.</li>
<li>Offer modelling internships from lesser known companies.
<li>Offer Network Level Marketing (NLM) internships.</li>
<li>Offer any internship where there is a possibility for an intern consuming alcohol or smoking or inducing others to do so, as the majority of our users are underage.</li>
<li>Offer internships from individuals or organisations promoting explicit religious content, a particular religious personality, or a sect etc.</li>
<li>Offer internships at businesses promoting or dealing in gambling and related games.</li>
<li>Make third party internship posting. An employer can post internships only for the organization that he/she directly works for. Recruiting agencies or any third party agencies are not authorized to post internships on their clients’ behalf</li>

	</ol>
</div>
	<?php 
		include '../Utility/Other/Footer.php';
		include '../Utility/JS/Bottom.php';
		?>
