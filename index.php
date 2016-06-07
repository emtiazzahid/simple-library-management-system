
<?php
  
  include("config.php");
  session_start();
   if(isset($_POST['signinButton']))
   {
      $username= $_POST['userName'];
      $password= $_POST['password'];

      

      $result = mysqli_query($conn, "SELECT id FROM accounts WHERE username = '$username' and password = '$password'");

      if (mysqli_num_rows($result)==1) {
        $_SESSION['username']=$username;
        $row = $result->fetch_array(MYSQLI_NUM);
        $_SESSION['userid']=$row[0];
        header('Location: home.php');
      }
      else{
          $_SESSION['errors'] = array("Enter Your Username & Password Correctly.");
          header('Location: index.php');
      }
    


   }
   if(isset($_GET['logout']))
   {
      $_SESSION['username']="";
   }
   
?>

 <!DOCTYPE html>

<html>
<head>
   <link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="Css/myown.css">
   <script src="js/bootstrap.js" ></script>
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<body  class="bodyBack">
    <div>

        <nav class="navbar navbar-inverse" role="navigation">
        <a class="navbar-brand navbar-left" href="#">Library Management System</a>
        <div class="container"  >

             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>          
  </div>

  <div class="collapse navbar-collapse">
      <!-- snip -->
  </div>
</nav>


</div>


    <div style="padding-top: 50px" >
            <div class="col-md-4 col-md-offset-4 centered" >
            <div class="panel panel-default" style="background-color: #55AAFF" >
                <div class="panel-body"  >
                    <fieldset >
                         <legend>Login Page</legend>
                              <form method="POST" action="" role="form" >
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" name="userName" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
                                  </div>
                                  <button name="signinButton" type="submit" class="btn btn-success">Submit</button>
                                  <input type="button" class="btn btn-danger" value="Forgot Password?" />
                                 <br> <a href="signup.php" style="color: black;">Create New Account</a>
                    </form>

                  </fieldset>

<script type="text/javascript"> 
$(document).ready( function() {
$('#deletesuccess').delay(5000).fadeOut();
});
</script>


            <?php if (isset($_SESSION['errors'])): ?>
                  <div class="form-errors">
                      <?php foreach($_SESSION['errors'] as $error): ?>
                          <p><?php echo '<h2 class="alert alert-danger" role="alert" id="deletesuccess" >'.$error ."</h2>" ; ?></p>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>
                </div>
            </div>
            </div>  
    </div>
         
</div>





</body>
</html>
