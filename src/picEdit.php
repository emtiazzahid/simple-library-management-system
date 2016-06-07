<?php 
	$cn = mysqli_connect('localhost','root','','librarydb');

	if(isset($_GET['eid']))
	{
		$id    = $_GET['eid'];
		$val   = mysqli_fetch_object(mysqli_query($cn,"SELECT * FROM accounts WHERE id = '$id'"));
	}

	if(isset($_POST['upload']))
	{
    	$id  = $_GET['eid'];
		$picturename = $_POST['picturename'];
		$image_name  = $_FILES['file']['name'];
		$image_type  = $_FILES['file']['type'];    
    $store       = rand(0,100000).$_FILES['file']['name'];

    if(empty($image_name))
    {
       mysqli_query($cn,"UPDATE tbpicture SET picturename = '$picturename' WHERE id = '$id'");
       header('location:index.php');
    }
    else
    {
      if($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/gif' || $image_type == 'image/png')
      {
           $part  = 'img/';
           $oldpic= $_POST['oldpic'];
           if(unlink($part.$oldpic))
           {
             move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$store);
             mysqli_query($cn,"UPDATE tbpicture SET picturename = '$picturename',profile = '$store' WHERE id = '$id'");
             header('location:index.php');
           }

      }
      else
      {
        echo "Invalide File";
      }  
    }



		
	}

	
?>
	
<html>
<head>
	
	<title>Upload Picture</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body style="background-color:brown"><br/>
  <div class="container" style="background-color:#eee;">
      <center><h3 style="color:blue">Upload Picture</h3></center>

      <form action="" method="post" enctype="multipart/form-data">
   		<table class="table">
   				<tr>
   					<td>
   						<label>Picture Name</label>
   						<input type="text" name="picturename" value="<?= $val->picturename ?>" class="form-control">
   						
   					</td>
   					<td>
   						<label>Profile</label>
   						<input type="file" name="file" class="form-control" id="images">
   						<img id="blah" src="img/<?=$val->profile?>" alt="your image" style="width:140px;height:120px;" />
              <input type="hidden" name="oldpic" value="<?=$val->profile?>">
   					</td> 
   					<td>
   					  <label>&nbsp;</label>
   					  <input type="submit" value="update" class="btn btn-primary" name="upload"></td>  					
   				</tr>

   		</table>
   	 </form>
  </div>
</body>
</html>

<script type="text/javascript">
	$(function(){
		$("#images").change(function(){
            readURL(this);
	    });    
    });	

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>