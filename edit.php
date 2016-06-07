<?php
    include('session.php');
    require_once("functions/function.php");
    get_header();

 					  include_once 'Model/dbmysql.php';
                      $dbobj = new DB_con();
                      $conn = $dbobj->connect();

$bid = $_GET['bookId'];
$query = mysqli_query($conn,"SELECT * FROM booklist WHERE bookId = '$bid'");
while($row = mysqli_fetch_row($query)) {

    	$bookId = $row[0];
     	$bookCode = $row[1];
        $addBookTitle = $row[2];
        $addAuthorName = $row[3];
        $addPublishar = $row[4];
        $addEdition = $row[5];
}
    
?>


<br>
	<br>
	<div style="padding-top: 50px">
            <div class="col-md-4 col-md-offset-4 centered">
            <div class="panel panel-default" style="background-color: #55AAFF">
                <div class="panel-body">
                    <fieldset>
                         <legend>Update Book Info</legend>
                                 <form method="get" action="update.php">
                                     <div class="form-group">
                                       
                                     <input type="hidden" name="bookId" value="<?php echo $bookId ?>">

                                     <label>Book Code </label>
							              <input type="text" name="addBookCode" value="<?php echo $bookCode ?>" class="form-control"  placeholder="Enter Book Code"/>
                  										<br>
                  										<br>

                                      <label for="exampleInputEmail1">Book Title </label> 
							                        <input type="text" name="addBookTitle" value="<?php echo $addBookTitle ?>" class="form-control"  placeholder="Enter Book title"/> 
                  										<br>
                  										<br>

                                      <label for="exampleInputEmail1">Author Name</label>
                                      <input type="text" name="addAuthorName" class="form-control" value="<?php echo $addAuthorName ?>" placeholder="Enter Author Name " />
                                      <br>
                                      <br>

                                      <label for="exampleInputEmail1">Publisher </label>
					                            <input type="text" name="addPublishar" class="form-control" value="<?php echo $addPublishar ?>" placeholder="Enter Publisher Name" />
								                      <br>
					                            <br>

					                    <label for="exampleInputEmail1"> Edition </label>
					                   <input type="text" name="addEdition"class="form-control" value="<?php echo $addEdition ?>" placeholder="Enter Edition" />
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
                                        <input type="submit"  value="Update" class="btn btn-success">
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
