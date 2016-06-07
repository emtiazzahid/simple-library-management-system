<!DOCTYPE>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Css/myown.css">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="Css/font-awesome.min.css">
  </head>

  <body class="bodyBack">
         
          
  <!--======================================================-->

<nav class="navbar navbar-custom" role="navigation">
          <div class="container">
              <div class="navbar-header">
                 <a class="navbar-brand" href="home.php"> <img style="max-width:100px; margin-top: -30px;" class="pull-left" 
                       src="img/AZ_logo.png">
                  
                  Library Management System
                  </a>
               </div>


          <ul class="nav navbar-nav navbar-right">
            <li><a  href="home.php">Home</a></li>
            <li><a  href="viewLibrary.php">View Library</a></li>
            <li><a  href="addBook.php">Add Book</a></li>
            <li><a  href="delete_manual.php">Delete Book</a></li>
            <li><a  href="account.php">Account</a></li>
            <li><a  href="logout.php"><i class="fa fa-user" aria-hidden="true"></i>
            Sign Out(<?php echo strtoupper($_SESSION['username']); ?>)</a></li>
          </ul>

             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>          
              </div>
            </div>
     </nav>
      