<?php 
include 'Utility/CSS/Head.php';
include 'Utility/Other/NavBar.php';
?>
<!-- According to user input. we will print Movies here -->
  <?php 
  include 'DataBase/DB_Connection.php';
$conn=OpenCon();


  $query = "SELECT * FROM InternshipData";    
  $result = mysqli_query($conn, $query);
   $rowcount=mysqli_num_rows($result);
         echo "<center><p><b>Total Internship :</b> $rowcount</p></center>";
        ;
  while($row = mysqli_fetch_array($result)){
  $FullMovieName = $row[Title];

    // if (strpos(strtolower($FullMovieName), strtolower($movie)) !== false) {
      echo "<div class='container'>";
      echo "<div class='row'>";
    // echo  "<div class='col col-lg-2'><img src=\"data:image/jpeg;base64,'.base64_encode($row['company_logo']).'\" width=180px height=250px class='rounded float-left'></div>";
       echo '  
                          <div class="col col-lg-2"> 
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['company_logo'] ).'" class="rounded-circle" height="250px" width="180px" class="img-thumnail" />  
                            </div> 
                     ';
      echo "<div class='col col-lg-10'>";
        echo "<h4><b>$row[title]</b></h4>";
        echo "<p><b>Release Date:</b> $row[company]</p>";
        echo "<p><b>User Rating:</b> $row[about_company]</p>";
        ;
        echo "<p><b>Overview:</b> $row[apply_by]</p>";
            echo "<form>";
        echo "<input class='btn btn-success' name='check' type='submit' value='submit'>";      echo "</form>";
    echo "  </div>";
    echo "</div>";

    echo "<hr>";
    echo "</div>";
    

      }
      if(isset($_REQUEST["check"])){
         echo "<center><p><b>Total Internship :</b> $row[about_company]</p></center>";
}

    // } 
   // }

   ?>

		<?php 
		include 'Utility/Other/Footer.php';
		include 'Utility/JS/Bottom.php';
		?>

