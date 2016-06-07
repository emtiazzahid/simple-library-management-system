<!--==========================PHP==============================-->
<!--==========================PHP==============================-->

<?php
    include('session.php');
    require_once("functions/function.php");
    get_header();
?>
<?php
                      

                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "librarydb";



                      
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      } 

                       if (isset($_POST['search'])) {
                        $valueToSearch = $_POST['valueToSearch'];
                         $qry = "SELECT * FROM `booklist` WHERE CONCAT(`bookId`, `bookCode`, `bookTitle`, `authorName`, `publisher`, `edition`, `catagory`) LIKE '%".$valueToSearch."%'";
                         $search_result = filterTable($qry);
                      }

                      else
                      {
                        $qry = "SELECT * from `booklist`";
                        $search_result = filterTable($qry);

                      }

                      function filterTable($qry)
                      {

                        $conn = new mysqli("localhost", "root","", "librarydb");
                         $filter_Result = mysqli_query($conn,$qry);
                         return $filter_Result;
                       }

                       
                      while($rowData = mysqli_fetch_object($search_result))
                      {
                     $a[] = $rowData;
                      }




                     /* $sql = "SELECT COUNT(bookId) FROM booklist"; 

                      $rs_result = mysqli_query($conn,$sql);  

                      $row = mysqli_fetch_row($rs_result);  

                      $total_records = $row[0]; 

                      $total_pages = ceil($total_records / $limit);  */

                 
?>

<!--==========================PHP==============================-->
 



<h2 align="center"><u>Available Books</u></h2>
<br>
<br>


<form method="POST" action="viewlibrary.php" >
  <div class="form-group pull-right">
                <input name="valueToSearch" type="text" class="form-control" placeholder="All Books or enter choise">
                 <input type="submit" value="Filter/Search" name="search" class="form-control" >
  </div>
</form>
            

           <table id="example" class="table table-bordered table-striped table-hover" >
                      <thead >
                          <tr class="info">
                              <th>Sl no.</th>
                              <th>Book Code</th>
                              <th>Book Title</th>
                              <th>Author Name</th>
                              <th>Publisher</th>
                              <th>Edition</th>
                              <th>Catagory</th>
                              <th colspan="3" class="text-center">Action</th> 
                          </tr>
                      </thead>


               <tbody >
                      <?php 
                        $srl = 1;
                        foreach ($a as $data){
                        ?> 

                      <tr class="success">
                      <td><?php echo $data->bookId ?></td>
                      <td><?php echo $data->bookCode ?></td>     
                      <td><?php echo $data->bookTitle ?></td> 
                      <td><?php echo $data->authorName ?></td> 
                      <td><?php echo $data->publisher ?></td> 
                      <td><?php echo $data->edition ?></td> 
                      <td><?php echo $data->catagory ?></td> 
                      <td><a href="edit.php?bookId=<?php echo $data->bookId ?>" class="btn btn-primary ">Edit</a></td>
                      <td><a href="delete.php?bookId=<?php echo $data->bookId?>" class="btn btn-primary ">Delete</a></td>
                      </tr>
                       <?php 
                        }
                       
                      ?>
                </tbody>
            </table>




           <nav class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>



      </div>

</body>
</html>