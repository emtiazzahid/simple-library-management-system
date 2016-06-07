<?php
    include('session.php');
    require_once("functions/function.php");
    get_header();

 					  include_once 'Model/dbmysql.php';
                      $dbobj = new DB_con();
                      $conn = $dbobj->connect();

$accountId = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM accounts WHERE id = '$accountId'");
while($row = mysqli_fetch_row($query)) {
        $password = $row[5];
}
if (!empty($_POST)) {
	$oldpassword = $_POST['oldpassword'];
	$newpassword =  $_POST['newpassword'];
	if ($password == $oldpassword) {
		$updatequery = "UPDATE accounts set password = '$newpassword' WHERE id = '$accountId'";
		$result = mysqli_query($conn, $updatequery);
		if ($result) {
			echo  "<script>
            alert('Password Changed.');
          </script>";
		}
		else
		{
			echo  "<script>
            alert('Error in changing password.');
          </script>";
		}
  }
  else{
  	echo  "<script>
            alert('You entered Wrong Password! please try again');
          </script>";
  }
  	


}

    
?>

<div style="padding-top: 50px">
            <div class="col-md-4 col-md-offset-4 centered">
            <div class="panel panel-default" style="background-color: #55AAFF">
                <div class="panel-body">
                    <fieldset>
                         <legend>Change Password</legend>
                                 <form method="post" action="">
                                     <div class="form-group">
                                       
                                     <label for="">Old Password </label>
							                       <input type="text" name="oldpassword" class="form-control"  placeholder="Enter Old Password"/>
                  										<br>
                  										<br>

                                      <label for="">New Password </label> 
							                        <input type="text" name="newpassword" class="form-control"  placeholder="Enter New Password"/> 
                  										<br>
                  										<br>
                                        <input type="submit"  value="submit" class="btn btn-success">
                                       <a href="account.php" class="btn btn-success">Go back</a>
                                    </div>
                                </form>
                  </fieldset>
                </div>
            </div>
            </div>  
    </div>


	</body>	
</html>	
