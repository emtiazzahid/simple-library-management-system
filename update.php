<?php
     include('session.php');
    require_once("functions/function.php");
    get_header();

                      include_once 'Model/dbmysql.php';
                      $dbobj = new DB_con();
                      $conn = $dbobj->connect();

   if(!empty($_GET))
{
        $bookId = $_GET["bookId"];
        $bookCode = $_GET["addBookCode"];
        $addBookTitle = $_GET["addBookTitle"];
        $addAuthorName = $_GET["addAuthorName"];
        $addPublishar = $_GET["addPublishar"];
        $addEdition = $_GET["addEdition"];
        $addCatagory = $_GET["bookCatagory"];
 
 $chk = $dbobj->update($bookId, $bookCode,$addBookTitle, $addAuthorName,$addPublishar, $addEdition,$addCatagory);
 if ($chk) {
   echo  "<script>
            alert('Book Info Updated.');
          </script>";
    header("Location: viewlibrary.php");

 }
 
}
?>