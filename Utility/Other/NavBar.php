
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
      
        <li class="nav-item dropdown dropdown-hover">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN/REGISTER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Register_as_a_Student">Register as a Student</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Regitser_as_an_Employee">Regitser as an Employee</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#StudentLogin">Login as a Student</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#EmployeeLogin">Login as an Employee</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- login as a Student Modal start -->
<div class="modal fade" id="StudentLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Please Enter the Cridentials:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
           <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="Student_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
         <button type="submit" name="login_as_a_Student" class="btn btn-success">login!!!</button>
       </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Register!!!</button>
      </div> -->
    </div>
  </div>
</div>
<!-- login as a Student Modal end -->
<!-- login as a Employee Modal start -->
<div class="modal fade" id="EmployeeLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Please Enter the Cridentials:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
           <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="Employee_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
         <button type="submit" name="login_as_a_Employee" class="btn btn-success">login!!!</button>
       </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Register!!!</button>
      </div> -->
    </div>
  </div>
</div>
<!-- login as a Employee Modal end -->

<!-- Register as a Student Modal start -->
<div class="modal fade" id="Register_as_a_Student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Please Fill The Details:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
           <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="Student_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Confirm-Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
         <button type="submit" name="Register_as_a_Student" class="btn btn-primary">Submit</button>
       </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Register!!!</button>
      </div> -->
    </div>
  </div>
</div>
<!-- Register as a Student Modal end -->

<!-- Register as a Student Modal start -->
<div class="modal fade" id="Regitser_as_an_Employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Please Fill The Details:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
           <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="Employee_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="text" name="Company_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Confirm-Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
         <button type="submit" name="Regitser_as_an_Employee" class="btn btn-primary">Submit</button>
       </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Register!!!</button>
      </div> -->
    </div>
  </div>
</div>
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