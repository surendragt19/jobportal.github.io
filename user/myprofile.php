


<?php
include('../comman.php');
 include('user_header.php');

if(isset($con))
{


$q1="select * from user where email='$user'";
$r1=mysqli_query($con,$q1);







  if (isset($_POST['edit_profile']))
   {

  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $dob=$_POST['dob'];
  $title=$_POST['title'];
  $skill=$_POST['skill'];
  $hq=$_POST['hq'];
  $gender=$_POST['gender'];
  $location=$_POST['location'];








  //image


if (strlen($_FILES['pic']['tmp_name'])) {
  $pic=$_FILES['pic'];
  $tmp_name=$_FILES['pic']['tmp_name'];
  $fname=$_FILES['pic']['name'];

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
          $fname=$user.".".$file_ext;

         $res1=move_uploaded_file($tmp_name,"../user/img/".$fname);
         $qq1="update user set ppic='$fname' where email='$user'";
         $res3=mysqli_query($con,$qq1);


         if (!$res1 && $res3)
         {
           echo "<script>alert('Uploading Failed...');location.href='myprofile.php'</script>";
        }
        }


  }
 if (strlen($_FILES['cv']['tmp_name'])) {
   $cv=$_FILES['cv'];
   $cv_tmp_name=$_FILES['cv']['tmp_name'];
   $cv_fname=$_FILES['cv']['name'];
   $ff1=strtolower($cv_fname);
   $tmp1 = explode('.', $ff1);
   $file_ext1 = end($tmp1);
   $cv_fname=$user.".".$file_ext1;

   $res2=move_uploaded_file($cv_tmp_name,"../user/cv/".$cv_fname);
   $qq2="update user set cv='$cv_fname' where email='$user'";
   $res4=mysqli_query($con,$qq2);
   if (!$res2 && $res4)
   {
   echo "<script>alert('Uploading Failed...');location.href='myprofile.php'</script>";
   } }



 $quary="update user set name='$name',phone='$phone',dob='$dob',jtitle='$title',skill='$skill',
 qualification='$hq',gender='$gender',location='$location' where email='$user'";


 $res=mysqli_query($con,$quary);

 if($res)
 {

 echo "<script>alert('Profile Updated Successfully');location.href='../user/myprofile.php';</script>";
   }
   else {
     echo "<script>alert('Profile Updated Failed...try again.');</script>";
 }









}
}

?>

<div class="container-fluid">

  <div class="container">



    <div class="row">

      <div class=" mt-4 col-12 text-center text-dark h2 font-weight-bold">

      <span style="border-bottom:6px double #33b5e5;" >My Profile</span>
      </div>


      <div class="col-12 mt-1">
          <div class="container">

                  <div class="row my-3 p-4">
                  <div class="col-md-12 p-5 mx-auto border " style="background:white;box-shadow: 0px 0px 10px 0px rgba(0,0,0,.3);">
                    <div class="h2 font-weight-bold pb-4 text-dark">
                    Edit Details
                    </div>
<?php
if ($r1) {


while($rows=mysqli_fetch_assoc($r1)) {?>
                    <form method="post" enctype="multipart/form-data">
                    <div class="row my-3">
                      <div class="col-md-6 ">
                    <img src="img/<?php echo $rows['ppic']?>" style="width:120px" class="img-thumbnail my-3" /><br />
                    <label  class="h6">Upload Pic</label>
                        <input type="file" name="pic" class="form-control-file border p-2">
                      </div>
                      <div class="col-md-6 ">
                    <img src="cv/<?php echo $rows['cv']?>" style="width:120px" class="img-thumbnail my-3" /><br />
                    <label  class="h6">Upload CV</label>
                        <input type="file" name="cv"  class="form-control-file border p-2">
                      </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                          <label class="h6">Name</label>
                            <input type="text" required value="<?php echo $rows['name']?>" name="name" class=" form-control py-4" style="border-radius:0px;">
                        </div>
                        <div class="col-md-6">
                          <label  class="h6">Email</label>
    <input type="email" disabled name="email" value="<?php echo $rows['email']?>" class=" form-control py-4" style="border-radius:0px;">
                        </div>
                    </div>
                    <div class="row  my-3">
                        <div class="col-md-6">
                          <label  class="h6">Contact</label>
                            <input type="number"  value="<?php echo $rows['phone']?>"required name="phone" class=" form-control py-4" style="border-radius:0px;">
                        </div>
                        <div class="col-md-6">
                          <label  class="h6">Date of Birth</label>
    <input type="date"  class=" form-control py-4" value="<?php echo $rows['dob']?>" required name="dob" style="border-radius:0px;">
                        </div>
                    </div>
                    <div class="row  my-3">
                        <div class="col-md-6">
                          <label  class="h6">Job Title</label>
                            <input type="text" required name="title" value="<?php echo $rows['jtitle']?>"class=" form-control py-4" style="border-radius:0px;">
                        </div>
                        <div class="col-md-6">
                          <label  class="h6">Skills</label>
    <input type="text"  class=" form-control py-4" value="<?php echo $rows['skill']?>" required name="skill" style="border-radius:0px;">
                        </div>
                    </div>
                    <div class="row  my-3">
                        <div class="col-md-6 ">
                          <lebal class="h6">Highest Qualification</lebal>
                        <select value="<?php echo $rows['qualification']?>" class="form-control mt-2" required name="hq" style="border-radius:0px;">
                        <option >B.tech</option>
                      <option >M.tech</option></select>
                        </div>
                        <div class="col-md-6">
                          <label  class="h6">Location</label>
    <input type="text"  class=" form-control py-4" value="<?php echo $rows['location']?>" required name="location" style="border-radius:0px;">
                        </div>


                    </div>
                    <div class="row  my-3">

                      <div class="col-md-6 mt-2">
                        <label  class="h6">Gender</label><br>
  <input type="radio" checked="checked" name="gender" value="male" class="mr-2">Male <input type="radio" value="female" name="gender" class="ml-4 mr-2">Female <input value="other" type="radio" name="gender" class=" mr-2 ml-4">Other
                      </div>

                    </div>
                    <div class="row">
                        <div class="col-12 mt-3">
                          	<input type="submit" value="EDIT" name="edit_profile" class="btn-11 btn py-2 px-5 bg-color my-4 " style=" border-radius:0px;  color: white;">
                        </div>
                    </div>




                    </form>
                  <?php }}else {
                    echo "<script>
                    alert('Something Error....'); location.href='index.php';</script>";
                  }
                  ?>



                  </div>
              </div>
          </div>
      </div>


    </div>

  </div>


  </div>





<?php include('user_footer.php'); ?>
