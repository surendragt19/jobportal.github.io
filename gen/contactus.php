
<?php

include('../comman.php');

if(isset($con))
{

if (isset($_POST['msg_submit']))
 {

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];

$quary="insert into contact(name, email, phone, msg, date) VALUES ('$name','$email',$phone,'$msg',curdate())";

           $res=mysqli_query($con,$quary);

           if($res)
           {

             echo "<script>alert('Message Send Successfully.....');location.href='../gen/index.php';</script>";
             }
             else {
               echo "<script>alert('Message Not Send....');</script>";
           }


}

}

 ?>


<?php include('../gen/header.php') ?>

<div class="container-fluid">
<div class="row" >
  <div class="col-12 bg-color py-5 text-center">
    <span class="h2 text-light font-weight-bold">Contact Us</span><br></br>

  </div>

    <div class="col-12 mt-3">
        <div class="container">

                <div class="row my-5 ">
                <div class="col-md-12 p-5 border  " style="background:white;box-shadow: 0px 0px 10px 0px rgba(0,0,0,.3);">


<div class=" col-12">
  <div class="row my-3">
<div class="col-12">

</div>

                      <div class="col-md-7 pr-4">
                        <div class="h3  pb-4  text-dark">
                          <span style="padding-bottom: 5px;border-bottom:4px solid #0099CC;">Send</span> Your Message
                        </div>
                        <form method="post" enctype="multipart/form-data">
                        <div class="row my-3">
                            <div class="col-md-6">
                              <label class="h6">Your Name</label>
                                <input type="text"  required name="name" placeholder="Enter Your Name*" class=" form-control py-4" style="border-radius:0px;">
                            </div>
                            <div class="col-md-6">
                              <label class="h6">Contact</label>
                                <input type="number"  required name="phone" placeholder="Enter Your Contact Number*" class=" form-control py-4" style="border-radius:0px;">
                            </div>


                        </div>

                        <div class="row my-3">
                          <div class="col-md-12">
                            <label class="h6">Your Email</label>
                              <input type="email"  required name="email" placeholder="Enter Your Email*" class=" form-control py-4" style="border-radius:0px;">
                          </div>


                        </div>
                        <div class="row my-3">

                          <div class="col-md-12 mt-2">
                            <label  class="h6">Your Message</label><br>
      <textarea class="form-control" required name="msg" placeholder="Type Your Message Here*" style="border-radius:0px;"></textarea>
                          </div>
                        </div>


                        <div class="row">
                            <div class="col-12 mt-3">
                              	<input type="submit"  name="msg_submit" class="btn-11 btn py-2 px-5 bg-color my-4 " style=" border-radius:0px;  color: white;">
                            </div>
                        </div>




                        </form>
                      </div>
                      <div class="col-md-5 ">
                        <div class="row ml-2">
                          <div class="col-12 card p-4" style="background:#F5F5F5;">
                            <div class="h3  pb-4  text-dark">
                              <span style="padding-bottom: 4px;border-bottom:3px solid #0099CC;">Contact</span> Info
                            </div>
                            <div class="row">
                              <div class="col-sm-1 offset-1">
                              <div class=" bg-color text-center " style="height:30px;width:30px;border-radius:50%; color:white; ">
                                  <span class="fa fa-star" style="line-height:30px;"></span>
                              </div>
                              </div>
                              <div class="col-sm-8 pl-4">
                                <div class="h5 font-weight-bold pb-2" style="color:#019ACD;">
                                  <span style="border-bottom:2px solid #019ACD;">Office</span> Address
                                </div>
                                <div style="font-size:14px;">
                                  Plot No-44, Behind H.P Petrol Pump,
Tedhi Pulia Ring Rd, Sector 5,
Vikas Nagar, Lucknow
Uttar Pradesh 226022
                                </div>
                              </div>
                            </div>

                            <div class="row my-4">
                              <div class="col-sm-1 offset-1">
                              <div class=" bg-color text-center " style="height:30px;width:30px;border-radius:50%; color:white; ">
                                  <span class="fa fa-star" style="line-height:30px;"></span>
                              </div>
                              </div>
                              <div class="col-sm-8 pl-4">
                                <div class="h5 font-weight-bold pb-2" style="color:#019ACD;">
                                  <span style="border-bottom:2px solid #019ACD;">Call</span> Us
                                </div>
                                <div style="font-size:14px;">
                                  <a href="tel:+91 7007237006">+91 7007237006</a><br />
                                    <a href="tel:+91 7007237006">+91 7007237006</a>
                                </div>
                              </div>
                            </div>

                            <div class="row pb-3">
                              <div class="col-sm-1 offset-1">
                              <div class=" bg-color text-center " style="height:30px;width:30px;border-radius:50%; color:white; ">
                                  <span class="fa fa-star" style="line-height:30px;"></span>
                              </div>
                              </div>
                              <div class="col-sm-8 pl-4">
                                <div class="h5 font-weight-bold pb-2" style="color:#019ACD;">
                                  <span style="border-bottom:2px solid #019ACD;">Mail</span> Us
                                </div>
                                <div style="font-size:14px;">
                                  <a href="mailto:techpilelko@gmail.com">techpilelko@gmail.com</a><br />
                                    <a href="mailto:hr@techpile.in">hr@techpile.in</a>


                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                      </div>







  </div>
</div>



                </div>
            </div>
        </div>
    </div>




    <div class="col-12 mt-3">
        <div class="container">


                <div class="row my-5 ">
                  <div class="col-12 text-center mb-5">
                    <span class="h2 font-weight-bold "><span style="border-bottom:4px solid #0099CC; padding-bottom:4px;">Google</span> Map</span>
                  </div>
                <div class="col-md-12" >



<iframe class="border" style="box-shadow: 0px 0px 10px 0px rgba(0,0,0,.3);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d899.4307195297233!2d80.96634718730965!3d26.898379306453577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39995785d5f7f1a5%3A0xffa47f1efe103f0d!2sTechpile%20Technology%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1608242468664!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


                </div>
            </div>
        </div>
    </div>
</div>



</div>

<?php include('../gen/footer.php') ?>
