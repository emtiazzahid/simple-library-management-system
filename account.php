<?php
    include('session.php');
    require_once("functions/function.php");
    get_header();
?>

<br>
<br>
          <?php 
          include_once 'Model/dbmysql.php';
          $dbobj = new DB_con();
          $cn = $dbobj->connect();
          $user = $_SESSION['username'];
          $accountInfo = mysqli_query($cn,"SELECT * FROM accounts WHERE username = '$user'");
          while($row = mysqli_fetch_row($accountInfo))
          {
            ?>
                          <center>
                             <img src="img/proPic/<?php echo $row[8]; ?>" class="img-circle" alt="Account Profile Picture" width="236" height="236" >
                          </center>
                            
                                          <div style="padding-top: 50px">
                          <div class="col-md-6 col-md-offset-3 centered">
                          <div class="panel panel-default" style="background-color: #55AAFF">
                              <div class="panel-body">
                                  <fieldset>
                                       <legend>Your Account Info</legend>
                                              <table class="table ">

                                <label><h3> <?php echo $row[1]; ?> </h3></label>
                                	<tr>
                                		<td>Age</td>
                                		<td><?php echo $row[2]; ?></td>
                                	</tr>
                                	<tr>
                                		<td>Home Address</td>
                                		<td><?php echo $row[3]; ?></td>
                                	</tr>
                                	<tr>
                                		<td>Email</td>
                                		<td><?php echo $row[4]; ?></td>
                                	</tr>
                                	<tr>
                                		<td>Phone Number</td>
                                		<td><?php echo $row[6]; ?> </td>
                                	</tr>
                                  <tr>
                                    <td>Gender</td>
                                    <td><?php echo $row[7]; ?> </td>
                                  </tr>
                                	<tr>
                                		<td><a href="updateprofile.php?id=<?php echo $row[0]; ?> " class="btn btn-primary ">Change Password</a></td>
                                	</tr>
                                </table>

 <?php
          }
             ?>
                                </form>

                  </fieldset>
                </div>
            </div>
            </div>  
    </div>

 </div>

</div>





</body>
</html>