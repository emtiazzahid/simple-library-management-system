<?php
    include('session.php');
    require_once("functions/function.php");
    get_header();
?>

 <?php

          include_once 'Model/dbmysql.php';
          $dbobj = new DB_con();
          $conn = $dbobj->connect();

                      // Check connection
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      }

                     

                      if (!empty($_POST)) {
                          $bookCode = $_POST["bookCode"];
                          $catagory = mysqli_real_escape_string($conn,$_POST["catagory"]);
                          


						          $sql = "DELETE FROM booklist WHERE bookCode = '$bookCode' AND catagory = '$catagory'" ;
                            
                              if ($conn->query($sql) === TRUE) {
                                  echo  "<script>
                                      alert('request accepted.');
                                  </script>";
                                }
                              else {
                                  echo "Error: " . $sql . "<br>" . $conn->error;
                              }

                      }
                         
                $conn->close();
?> 


 
<br>
<br>
        <div style="padding-top: 50px">
            <div class="col-md-4 col-md-offset-4 centered">
            <div class="panel panel-default" style="background-color:#55AAFF">
                <div class="panel-body">
                    <fieldset>
                         <legend>Delete Book</legend>
						 
                                 <form method="post" action="">
                                 <div class="form-group">
                                   
                                    <label for="exampleInputEmail1">Book Code </label>
                                        <input type="text" name="bookCode" class="form-control"  placeholder="Enter Book Code"/>
                                        <br>
                                        <br>
                                        <label for="exampleInputEmail1"> Catagory of book:</label>
                                         <select  class="form-control" id="sel1" name="catagory">
                                                  <option value="0">Choose Catagory</option>
                                                  <option value="cse">CSE</option>
                                                  <option value="bba">BBA</option>
                                                  <option value="eee">EEE</option>
                                                  <option value="eng">ENG</option>
                                                  <option value="low">LOW</option>
                                                  <option value="eco">ECO</option>
                                                  <option value="math">MATH</option>
                                                  <option value="act">ACT</option>
                                        </select> 
                                        <br>
                                        <br>
                                        <input type="submit" value="submit" class="btn btn-success" />
                                        <button type="clear" class="btn btn-success">Clear</button>
                                    </div>
                                </form>
                  </fieldset>
                </div>
            </div>
		</div>
	</div>
</body>
</html>