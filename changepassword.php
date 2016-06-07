 <!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
</head>
<body>
				<nav class="navbar navbar-inverse" role="navigation">
           <div class="container">
              <div class="navbar-header">
        <a class="navbar-brand" href="#">Library Management System</a>
               </div>


          <ul class="nav navbar-nav navbar-right">
            <li><a  href="home.php">Home</a></li>
            <li><a  href="viewLibrary.php">View Library</a></li>
            <li><a  href="search.php">Search</a></li>
            <li><a  href="addBook.php">Add Book</a></li>
            <li><a  href="delete_manual.php">Delete Book</a></li>
            <li><a  href="account.php">Account</a></li>
            <li><a  href="logout.php">Sign Out</a></li>
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
				<br>
				<br>
<form method="post">
        <div style="padding-top: 50px">
            <div class="col-md-4 col-md-offset-4 centered">
            <div class="panel panel-default" style="background-color: #55AAFF">
                <div class="panel-body">
                    <fieldset>
                         <legend>Change password</legend>
                                 <form>
                                 <div class="form-group">
                                   
                                   <label for="exampleInputEmail1">Old password </label> 
                                       <input type="password" name="oldPassword" class="form-control"  placeholder="Enter old password"/>  <br>
                                        <br>
                                    <label for="exampleInputEmail1">New password </label>
                                        <input type="password" name="newPassword" class="form-control"  placeholder="Enter new password"/>
                                        <br>
                                        <br>
                                          <label for="exampleInputEmail1">Confram password</label>
                                        <input type="password"name="conframPassword" class="form-control" placeholder="Enter new password " />
                                        <br>
                                        <br>
                                        
                                       
                   
                                        <button type="Submit" class="btn btn-success">Submit</button>
                                        <button type="clear" class="btn btn-success">Clear</button>
                                    </div>
                                </form>
                  </fieldset>
                </div>
            </div>
    </form>
</body>
</html>