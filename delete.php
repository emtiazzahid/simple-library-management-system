<?php
    include('session.php');
                      include_once 'Model/dbmysql.php';
                      $dbobj = new DB_con();
                      $conn = $dbobj->connect();

                     
                       if( $_GET["bookId"])
                        {
                        $id = $_GET["bookId"];

                        $sql = "DELETE FROM booklist ". "WHERE bookId = '$id'";
                            
                              if ($conn->query($sql) === TRUE) {
                                  echo  "<script>
                                      alert('Book Deleted');
                                  </script>";
                                }
                              else {
                                  echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                        }
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                         
                $conn->close();
?> 