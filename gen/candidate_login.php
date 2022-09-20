<?php
session_start();

if (isset($_SESSION['user'])) {
echo "<script>location.href='../user/index.php';</script>";
}
?>


<?php

include('../comman.php');

if(isset($con))
{

if (isset($_POST['btn_can_login']))
 {

$email=$_POST['email'];
$pass1=$_POST['pass'];
$pass=md5($pass1);

$quary="SELECT email FROM user WHERE email='$email' and password = '$pass'";
$chk=mysqli_query($con,$quary);

if (mysqli_num_rows($chk)) {

$_SESSION['user']=$email;

echo "<script>location.href='../user/index.php';</script>";

}
else {
  echo "<script>alert('Plz Enter Valid Email and Password');</script>";

}

}
}
?>



<?php include('../gen/header.php') ?>

<div class="container-fluid">
<div class="row" >
<div class="col-12 text-dark  h2 font-weight-bold text-center mt-4">
    Login Your Account
</div>

    <div class="col-12 ">
        <div class="container">

            <div class="row my-5 ">
                <div class="col-md-6 mx-auto" >

                  <!-- Default form login -->
                  <!-- Material form login -->
  <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Candidate Login</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

      <!-- Form -->
      <form class="text-center" style="color: #757575;" method="post">

        <!-- Email -->
        <div class="md-form">
          <input type="email" id="materialLoginFormEmail" class="form-control" required name="email">
          <label for="materialLoginFormEmail">E-mail</label>
        </div>

        <!-- Password -->
        <div class="md-form">
          <input type="password" id="materialLoginFormPassword" class="form-control" required name="pass">
          <label for="materialLoginFormPassword">Password</label>
        </div>


        <!-- Sign in button -->
        <input class="form-control btn-outline-info btn-rounded btn-block my-5 waves-effect z-depth-0" type="submit" name="btn_can_login" value="Login" />

        <!-- Register -->
        <p>Not a member?
          <a href="../gen/candidate_register.php">Register</a>
        </p>



      </form>
      <!-- Form -->

    </div>

  </div>
  <!-- Material form login -->

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('../gen/footer.php') ?>
