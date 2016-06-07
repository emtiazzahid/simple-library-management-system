<?php
    include('session.php');
    require_once("functions/function.php");
    get_header();
?>
 <?php

include_once 'Model/dbmysql.php';
$dbobj = new DB_con();
$conn = $dbobj->connect();
if(!empty($_POST))
{
        $bookCode = $_POST["addBookCode"];
        $addBookTitle = $_POST["addBookTitle"];
        $addAuthorName = $_POST["addAuthorName"];
        $addPublishar = $_POST["addPublishar"];
        $addEdition = $_POST["addEdition"];
        $addCatagory = mysqli_real_escape_string($conn,$_POST["bookCatagory"]);
 
 $chk = $dbobj->insert($bookCode,$addBookTitle, $addAuthorName,$addPublishar, $addEdition,$addCatagory);
 if ($chk) {
   echo  "<script>
            alert('New Book Added.');
          </script>";
 }
 
}

?> 


	<br>
	<br>
	<div style="padding-top: 50px">
            <div class="col-md-4 col-md-offset-4 centered">
            <div class="panel panel-default" style="background-color: #55AAFF">
                <div class="panel-body">
                    <fieldset>
                         <legend>Add New Book</legend>
                                 <form method="post" action="">
                                     <div class="form-group">
                                       
                                     <label for="exampleInputEmail1">Book Code </label>
							                       <input type="text" name="addBookCode" class="form-control"  placeholder="Enter Book Code"/>
                  										<br>
                  										<br>

                                      <label for="exampleInputEmail1">Book Title </label> 
							                        <input type="text" name="addBookTitle" class="form-control"  placeholder="Enter Book title"/> 
                  										<br>
                  										<br>

                                      <label for="exampleInputEmail1">Author Name</label>
                                      <input type="text" name="addAuthorName" class="form-control" placeholder="Enter Author Name " />
                                      <br>
                                      <br>

                                      <label for="exampleInputEmail1">Publisher </label>
					                            <input type="text" name="addPublishar" class="form-control"  placeholder="Enter Publisher Name" />
								                      <br>
					                            <br>

					                    <label for="exampleInputEmail1"> Edition </label>
					                   <input type="text" name="addEdition"class="form-control"  placeholder="Enter Edition" />
					                   <br>
					                   <br>
                                        <label for="exampleInputEmail1"> Catagory of book: </label>
                                         <select  class="form-control" id="sel1" name="bookCatagory" >
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
                                        <input type="submit"  value="submit" class="btn btn-success">
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