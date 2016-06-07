<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'librarydb');

class DB_con
{
 public function connect()
 {
  $conn = new mysqli(DB_SERVER, DB_USER,DB_PASS,DB_NAME);
  return $conn;
 }
 
 public function insert($bookCode,$addBookTitle, $addAuthorName,$addPublishar, $addEdition,$addCatagory)
 {
 	$obj = new DB_con();
  $res = mysqli_query($obj->connect(),"INSERT INTO booklist (bookCode,bookTitle,authorName,publisher,edition,catagory)
                              VALUES ('$bookCode', '$addBookTitle', '$addAuthorName', '$addPublishar', '$addEdition' , '$addCatagory')");
  return $res;
 }
 
public function update($bookId, $bookCode,$addBookTitle, $addAuthorName,$addPublishar, $addEdition,$addCatagory)
 {
 	$obj = new DB_con();
  $res = mysqli_query($obj->connect(),"UPDATE booklist set bookCode = '$bookCode', bookTitle = '$addBookTitle',authorName = '$addAuthorName',publisher = '$addPublishar',edition ='$addEdition' ,catagory='$addCatagory' WHERE bookId = '$bookId'");

  return $res;
 }

 public function select()
 {
  $res=mysql_query("SELECT * FROM users");
  return $res;
 }
}

?>