
 <!-- https://codepen.io/Weezlo/pen/NRWZRb -->
 <!-- https://1stwebdesigner.com/open-source-modal-login-signup/ -->
<style>
  .dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}

</style>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
       <a class="navbar-brand" href="#">
    <img src="https://internshala.com/static/images/common/internshala_logo.svg" width="120px" height="30px" class="d-inline-block align-top" alt="internshala">
  </a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a class="navbar-brand" href="#">Fixed navbar</a> -->
  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="#">INTERNSHIPS</a>
      </li> -->
       <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INTERNSHIPS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Location</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Category</a>
        </div>
      </li>
      
      
        <li class="nav-item">
       
        <?php
                $email=$_SESSION['email'];
                $query = "SELECT * FROM EmployeeData WHERE email='$email'";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
             
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['profilepic'] ).'" class="rounded-circle" height="35px" width="35px" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?> 
      </li>
       <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Edit_Profile.php">Edit Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Add_Internships.php">Add Internships</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="EmployeeDashboard.php">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Change_Password">Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../Utility/Other/logout.php">LogOut!!!</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

<!-- Register as a Student Modal end -->

<!-- 
<div class="container">
  <div class="jumbotron">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
    <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</div>




8858011770
rahul

149 ajj
 -->