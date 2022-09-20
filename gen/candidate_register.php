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

if (isset($_POST['can_register']))
 {

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$title=$_POST['title'];
$skill=$_POST['skill'];
$hq=$_POST['hq'];
$gender=$_POST['gender'];
$location=$_POST['location'];
$pass=$_POST['password'];

$password=md5($pass);

$pic=$_FILES['pic'];
$tmp_name=$_FILES['pic']['tmp_name'];
$fname=$_FILES['pic']['name'];

$cv=$_FILES['cv'];
$cv_tmp_name=$_FILES['cv']['tmp_name'];
$cv_fname=$_FILES['cv']['name'];


//image

$ff1=strtolower($cv_fname);
$tmp1 = explode('.', $ff1);
$file_ext1 = end($tmp1);


$check="SELECT email FROM user WHERE email='$email'";

$chk=mysqli_query($con,$check);


if (mysqli_num_rows($chk)) {
echo "<script>alert('This Email is Already Registered');</script>";
}
else {

  $fname=$_FILES['pic']['name'];
  $tmp_name=$_FILES['pic']['tmp_name'];
  $ftype=$_FILES['pic']['type'];
   $ff=strtolower($fname);
   $tmp = explode('.', $ff);
  $file_ext = end($tmp);
  $extensions= array("jpeg","jpg","png");
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="Profile pic extension not allowed, please choose a JPG,JPEG or PNG file.";
        }
        if(empty($errors)==false){
          foreach ($errors as $e) {
            echo "<script>alert('$e');</script>";
          }

        }else{
          $fname=$email.".".$file_ext;
          $cv_fname=$email.".".$file_ext1;
         $res1=move_uploaded_file($tmp_name,"../user/img/".$fname);

          $res2=move_uploaded_file($cv_tmp_name,"../user/cv/".$cv_fname);

         if ($res1 && $res2)
         {
           $quary="INSERT INTO user(name,email,phone,dob,jtitle,skill,qualification,gender,location,password,cdate,ppic,cv) VALUES ('$name','$email',
           '$phone','$dob','$title','$skill','$hq','$gender','$location','$password',curdate(),'$fname','$cv_fname')";

echo $quary;
           $res=mysqli_query($con,$quary);

           if($res)
           {
             $_SESSION['user']=$email;

             echo "<script>alert('Account Created Successfully');location.href='../user/index.php';</script>";
             }
             else {
               echo "<script>alert('Account Not Created');</script>";
           }


         }else {
           echo "<script>alert('Uploading Failed...');</script>";
         }

        }

}






}




}

 ?>

<?php include('../gen/header.php') ?>
<div class="container-fluid">
<div class="row" >
  <div class="col-12 bg-color py-5 text-center">
    <span class="h2 text-light font-weight-bold">Create Account</span><br></br>
      <span class="text-light h5">Candidate <span class="fa fa-chevron-right mx-2" style="font-size:15px; "></span>Register</span>
  </div>

    <div class="col-12 mt-3">
        <div class="container">

                <div class="row my-5 p-4">
                <div class="col-md-12 p-5 mx-auto border " style="background:white;box-shadow: 0px 0px 10px 0px rgba(0,0,0,.3);">
                  <div class="h2 font-weight-bold pb-4 text-dark">
                    Information
                  </div>



                  <form method="post" enctype="multipart/form-data">
                  <div class="row my-3">
                      <div class="col-md-6">
                        <label class="h6">Name</label>
                          <input type="text" required name="name" class=" form-control py-4" style="border-radius:0px;">
                      </div>
                      <div class="col-md-6">
                        <label  class="h6">Email</label>
  <input type="email" required name="email"  class=" form-control py-4" style="border-radius:0px;">
                      </div>
                  </div>
                  <div class="row  my-3">
                      <div class="col-md-6">
                        <label  class="h6">Contact</label>
                          <input type="number" required name="phone" class=" form-control py-4" style="border-radius:0px;">
                      </div>
                      <div class="col-md-6">
                        <label  class="h6">Date of Birth</label>
  <input type="date"  class=" form-control py-4" required name="dob" style="border-radius:0px;">
                      </div>
                  </div>
                  <div class="row  my-3">
                      <div class="col-md-6">
                        <label  class="h6">Job Title</label>
                          <input type="text" required name="title" class=" form-control py-4" style="border-radius:0px;">
                      </div>
                      <div class="col-md-6">
                        <label  class="h6">Skills</label>
  <input type="text"  class=" form-control py-4" required name="skill" style="border-radius:0px;">
                      </div>
                  </div>
                  <div class="row  my-3">
                      <div class="col-md-6 ">
                        <lebal class="h6">Highest Qualification</lebal>
                      <select class="form-control mt-2" required name="hq" style="border-radius:0px;">
                      <option >B.tech</option>
                    <option >M.tech</option></select>
                      </div>
                      <div class="col-md-6">
                        <label  class="h6">Password</label>
  <input type="password"  class=" form-control py-4" required name="password" style="border-radius:0px;">
                      </div>


                  </div>
                  <div class="row  my-3">
                    <div class="col-md-6">
                      <label  class="h6">Location</label>
<input type="text"  class=" form-control py-4" required name="location" style="border-radius:0px;">
                    </div>
                    <div class="col-md-6 mt-2">
                      <label  class="h6">Gender</label><br>
<input type="radio" name="gender" value="male" class="mr-2">Male <input type="radio" value="female" name="gender" class="ml-4 mr-2">Female <input value="other" type="radio" name="gender" class=" mr-2 ml-4">Other
                    </div>

                  </div>
                  <div class="row  my-3">
                      <div class="col-md-6 ">
    <label  class="h6">Upload Photo</label>
        <input type="file" required name="pic" class="form-control-file border p-2">

                      </div>
                      <div class="col-md-6">
                        <label  class="h6">Upload CV</label>
<input type="file" required name="cv" class="form-control-file border p-2">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 mt-3">
                        	<input type="submit" name="can_register" class="btn-11 btn py-2 px-5 bg-color my-4 " style=" border-radius:0px;  color: white;">
                      </div>
                  </div>




                  </form>



                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php include('../gen/footer.php') ?>
