
<?php include('user_header.php') ?>
<?php

include('../comman.php');

if(isset($con))
{


if (isset($_POST['job_post']))
 {



$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$oldpass=$_POST['oldpass'];


//image
$check="SELECT password FROM user WHERE email='$user'";

$chk=mysqli_query($con,$check);

if ($chk) {

  while ($rows=mysqli_fetch_assoc($chk)) {
    $oldp=$rows['password'];
  }
  if ($pass1!=$pass2) {
    echo "<script>alert('New Password and Confirm Password are not same...');location.href='changepassword.php';</script>";

   }
  else if (md5($oldpass)!=$oldp) {
    echo "<script>alert('New Password and Old Password are not same...');location.href='changepassword.php';</script>";

  }else
  {

$password=md5($pass1);
$qq1="update user set password='$password' where email='$user'";
$r1=mysqli_query($con,$qq1);
if ($r1) {
  echo "<script>alert('Password Change Successfully.....');location.href='changepassword.php';</script>";

}else {
  echo "<script>alert('Password Not Change...try again.');location.href='changepassword.php';</script>";

}


  }

}
}
}
 ?>




<div class="container-fluid">
  <div class="container">


    <div class="row">

      <div class=" mt-4 col-12 text-center text-dark h2 font-weight-bold">

      <span style="border-bottom:6px double #33b5e5;" >  Change Passowrd</span>
      </div>


      <div class="col-12 mt-1">
          <div class="container">

                  <div class="row my-3 p-4">
                  <div class="col-md-6 p-5 mx-auto border " style="background:white;box-shadow: 0px 0px 10px 0px rgba(0,0,0,.3);">



                    <form method="post">
                    <div class="row my-2">
                      <div class="col-md-12 ">
                        <lebal class="h6">New Passowrd</lebal>
                        <input required type="password" class=" form-control py-2" name="pass1" style="border-radius:0px;">

                      </div>

                    </div>
                    <div class="row my-1">
                      <div class="col-md-12 ">
                        <lebal class="h6">Confirm Passowrd</lebal>
                        <input required type="password" class=" form-control py-2" name="pass2" style="border-radius:0px;">

                      </div>

                    </div>
                    <div class="row ">
                      <div class="col-md-12 ">
                        <lebal class="h6">Old Passowrd</lebal>
                        <input required type="password" class=" form-control py-2" name="oldpass" style="border-radius:0px;">

                      </div>

                    </div>

                    <div class="row">
                        <div class="col-12 mt-1">
                          	<input type="submit" value="Change" name="job_post" class="btn-11 btn py-2 px-5 bg-color my-4 " style=" border-radius:0px;  color: white;">
                        </div>
                    </div>




                    </form>



                  </div>
              </div>
          </div>
      </div>

  </div>
    </div>
</div>

<?php include('user_footer.php') ?>
