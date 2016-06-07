<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Birthday</title>

        <link href="../../../asset/css/bootstrap.css" rel="stylesheet">
    </head>
    <body class="">
        
        <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'atomicproject-rahad-107268' . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . "startup.php");

        use App\Bitm\SEIP107268\Birthday\BirthDate;
        use App\Bitm\SEIP107268\Utility\Utility;

        $date = new BirthDate();
        $days =  $date->index();
        ?>
        
        
        <div class="container">

            <h3 class="text-center text-success">Birthday List</h3>
            <hr>
            <div id="msg" style="background-color: #46b8da; color: #F00; font-size: 25px;">
                <?php echo Utility::message(); ?>            
            </div>
            <a href="create.php" class="btn btn-success">Add new birthday</a>
            
            <div class="form-group pull-right">
                <input type="text" class="form-control" placeholder="Filter">
            </div>
            <hr>
            <table class="table table-bordered table-hover text-center bg-info">
                <thead >
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Birthday</th>
                        <th colspan="3" class="text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                     <?php 
                        $srl = 1;
                        foreach ($days as $day){
                        ?>
                    <tr>
                        <td><?php echo $day->id ?></td>
                        <td><?php echo date('d-m-Y', strtotime($day->birthdate)); ?></td>
                        <td><a href="show.php?id=<?php echo $day->id ?>" class="btn btn-success ">View</a></td>
                        <td><a href="edit.php?id=<?php echo $day->id ?>" class="btn btn-primary ">Edit</a></td>
                        <td>
                            <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $day->id; ?>"/>
                                    <button class="btn btn-danger delete" type="submit" >Delete</button>
                                </form>
                        </td>
                    </tr>
                    <?php 
                        }
                       
                      ?>
                </tbody>
            </table>
            <a href="" onclick="window.history.go(-1)" class="pull-left "><button class="btn btn-danger">Back</button></a>
            <a href="./../../../index.php"  class="pull-right "><button class="btn btn-danger">Main List</button></a>
            
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


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../../asset/js/bootstrap.min.js"></script>
        
        <script>
            $('.delete').bind('click',function(e){
                var dlt = confirm("Are you sure to Delete book Title");
                if(!dlt){
                    e.preventDefault();
                }
            });
            $('#msg').fadeOut(5000);
        </script>
        

    </body>
</html>