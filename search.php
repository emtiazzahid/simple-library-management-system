<?php
    include('session.php');
    require_once("functions/function.php");
    get_header();

?>



<br>
<br>


<div style="padding-top: 50px">
            <div class="col-md-4 col-md-offset-4 centered">
            <div class="panel panel-default" style="background-color:#55AAFF">
                <div class="panel-body">
                    <fieldset>
                         <legend>Search Book</legend>
                                 <form method="post">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Book Name</label>
                                       
                                        <input type="text" name="searchBookName" class="form-control" placeholder="Enter Book Name" />
                                        <br>
                                        <br>
                                        <label for="exampleInputEmail1">Author Name</label>
                                        <input type="text" name="searchAuthorName" class="form-control" placeholder="Enter Author Name " />
                                        <br>
                                        <br>
                                        <label for="exampleInputEmail1"> Catagory of Book:</label>
                                         <select  class="form-control" id="sel1">
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
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="clear" class="btn btn-success">Clear</button>
                                    </div>
                                </form>
                  </fieldset>
                </div>
            </div>
            </div>  
    </div>

 </div>

</div>
</body>
</html>