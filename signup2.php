
<?php 

hlw

			$cn = mysqli_connect('localhost','root','','librarydb');

                     
			if(isset($_POST['signup']))
			{
				  $Name = $_POST["Name"];
	              $age = $_POST["age"];
	              $homeAddress = $_POST["homeAddress"];
	              $gender = $_POST["gender"];
	              $email = $_POST["email"];
	              $password = $_POST["password"];
	              $phoneNo = $_POST["phoneNo"];
				  $picturename = $_POST['picturename'];
				  $image_name  = $_FILES['file']['name'];
				  $image_type  = $_FILES['file']['type'];
				  $picture       = rand(0,100000).$_FILES['file']['name'];


				if($image_type == 'audio/mp3' || $image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/gif' || $image_type == 'image/png')
				{
			       move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$picture);
			       mysqli_query($cn,"INSERT INTO accounts(username,age,homeAddress,email,password,phoneNo,gender,picture,picturename) VALUES('$Name','$age','$homeAddress','$gender','$email','$password','$phoneNo','$picturename','$picture')");
			        echo  "<script>
                                      alert('Account created.');
                                  </script>";
				}
				else
				{
					echo "Invalide File";
				}
			}


                         
                $cn->close();
?> 





<!DOCTYPE html>
<html>
<head>
	<link href="Css/bootstrap.css"  rel="stylesheet">
	<link href="Css/style.css"  rel="stylesheet">
	</head>
	<body>
  
        <div style="padding-top: 50px">
            <div class="col-md-4 col-md-offset-4 centered">
            <div class="panel panel-default" style="background-color:#55AAFF">



                <div class="panel-body">
                    <fieldset>
                         <legend>Registration</legend>
                                 <form method="post" enctype="multipart/form-data" action="">
                                 <div class="form-group">
                                   
                                    <label for="exampleInputEmail1"> Name </label>
                                        <input type="text" name="Name" class="form-control"  placeholder="Enter the Name"/>
                                        
                                        <br>
                                        <br>
                                        <label for="exampleInputEmail1"> Age </label> 
                                       <input type="text" name="age" class="form-control"  placeholder="Enter BirthDate as */**/***"/> 
                                        <br>
                                        <br>
                                          <label for="exampleInputEmail1"> Gender </label>
                                          <br>
                                          <input type="radio" name="gender" value="male"> Male<br>
                    										  <input type="radio" name="gender" value="female"> Female<br>
                    										  <input type="radio" name="gender" value="other"> Other
                    										  <br>
                    										  <br>
                                        <label for="exampleInputEmail1">Home Address</label>
                                        <input type="text" name="homeAddress"  class="form-control" placeholder="Enter home Address " />
                                        <br>
                                        <br>

                                         <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="email"  class="form-control" placeholder="Enter Email Address " />
                                        <br>
                                        <br>
                                        <label for="exampleInputEmail1">password</label>
                                        <input type="password" name="password"  class="form-control" placeholder="Enter password " />
                                        <br>
                                        <br>
                                         <label for="exampleInputEmail1">Phone No</label>
                                        <input type="text" name="phoneNo"  class="form-control" placeholder="Enter Phone Number " />
                                        <br>
                                        <br>
                                         <label for="exampleInputEmail1">Picture name</label>
                                        <input type="text" name="picturename"  class="form-control" placeholder="Enter Picture name " />
                                        <br>
                                        <br>
                                        <label for="exampleInputEmail1">Picture</label>
                                     	<input type="file" name="file" class="form-control" id="images">
                                        <br>
                                        <br>

                                         <input type="submit" value="signup" class="btn btn-primary" name="signup"></td>  
                                        <button type="clear" class="btn btn-success">Clear</button>
                                        <a href="index.php"><button type="button" value="Back to Login">Back to Login</button></a>
                                    </div>
                                </form>
                  </fieldset>
                </div>
            </div>






</body>
</html>