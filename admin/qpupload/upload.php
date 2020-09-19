<?php

include('include/db_connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
       .button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
}
    </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">




 
  <script src="jquery.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script>
       window.load=$( document ).ready(function() {
	
	 $.ajax({
                type:'POST',
                url:'countryAjaxData.php',
                success:function(html){
                    $('#country').html(html);
                
                                      }
                   }); 
				   
				    });  
					
					
				   $( document ).ready(function() {
					   
					   $('#country').on('change',function(){//change function on country to display all state 
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'cource_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select Branch first</option>'); 
                                      }
                   }); 
                      }else{
                           $('#state').html('<option value="">Select Cource first</option>');
                           $('#city').html('<option value="">Select Branch first</option>'); 
                           }
    });
    
    $('#state').on('change',function(){//change state to display all city
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'branch_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                                      }
                   }); 
                    }else{
                          $('#city').html('<option value="">Select Branch first</option>'); 
                         }
    });
	
	});
	 </script>
    
       
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
 <script>

 function myFunction2() { 

swal("---File---", "File Upload", "success") }

    </script>   
				   

</head>
    <body>
     <p id="profile1" style="color:red;margin-left:700px;margin-top:100px"><b>Question Papaer Upload.....(include all subject in that semester as single file)</b></p><br>
    <center>
	  

					<form method="post"  enctype="multipart/form-data" > 
		
		  <div class="col-md-1 col-sm-12" id="lable1"></div>
                    
					 <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Cource</div>
                    <div class="col-md-2">
                     
					<select name="cource" id="country"   
 data-live-search="true" class="chosen selectpicker form-control" required>
					<option>Select Cource</option>
					
                    </select>

                    </div>

                    
					
                  
                    <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Branch</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="branch" id="state"  autofocus="autofocus" required>
                    <option value="">Select an Branch</option>                            
                    </select>
                     </div>
                        
                        <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Stream</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="stream" id="city" standard title="Select an Option" autofocus="autofocus" required>
                    <option value="-1">Select a Stream<option>
                    </select>
                        </div>
                    
                

                 <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Semester</div>
                    <div class="col-md-2">
                    <select name="semester" class="selectpicker form-control"  standard title="Select an Option" autofocus="autofocus" required>
                    <option value="-1">Select an Semester</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                      <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Q-P Type</div>
                    <div class="col-md-2">
                    <select name="type" class="selectpicker form-control"  standard title="Select an Option" autofocus="autofocus" required>
                    <option value="-1">Select Type</option>
                        <option value="end_sem">End-Semester</option>
                        <option value="series">Series Exam</option>
                        
                    </select>
                </div>
                          
                        <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Year</div>
                    <div class="col-md-2">
                    <select name="year" class="selectpicker form-control"  standard title="Select an Option" autofocus="autofocus" required>
                        <option value="-1">Select Year</option>
                        <?php
                          for($i=2015;$i<=2025;$i++)
                        
                               echo "<option value='$i'>$i</option>";
                        ?>
                        
                        </select>

                </div>  
                          
                          
                          
                          
                         
                          
                          
                          <br><br>
                          
                          <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Select File</div>
                    <div class="col-md-2">
                                      <input type="file" name="fileToUpload"/>

                        
                  
                </div>
					<br><br>
                     <input  type="submit"  name="upload" class="button button5" value="Upload">

                     
                  
                    
					
                    <!--start 6 row-->
              
                          <?php
                          if(isset($_POST["upload"]))
                            {
                    
                                 
                                 $type=$_POST["type"];
                              
                                  if($type=="end_sem")
                                  {
                                 $cource=$_POST["cource"];
                                 $branch= $_POST["branch"];
                                 $stream=$_POST["stream"];
                                 $semester=$_POST["semester"];
                                $year=$_POST['year'];   
                                    $target_path = "end_sem/";
                                    $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
      
                                    $Filename= basename($target_path);
                                    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
                                    echo "";  
                                    } else{  
                                    echo "";  
                                    } 
   
                                     $upload="insert into tbl_upload(cource_id,branch_id,stream_id,semester,type,year,file) values('$cource','$branch','$stream','$semester','$type','$year','$Filename')";
        $res=mysqli_query($mysqli,$upload);
        //message code
        if($res)
        {
        echo "<script type='text/javascript'> myFunction2();</script>";
        }
                                      
            
                                      
                                      
                                  }elseif($type=="series")
                                  
                                  {
                                 $cource=$_POST["cource"];
                                 $branch= $_POST["branch"];
                                 $stream=$_POST["stream"];
                                 $semester=$_POST["semester"];
                                      $year=$_POST['year'];   
                                      $target_path = "series/"; 
                                      $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
      
                                    $Filename= basename($target_path);
                                    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
                                    echo "";  
                                    } else{  
                                    echo "";  
                                    } 
                                     
                                         $upload="insert into tbl_upload(cource_id,branch_id,stream_id,semester,type,year,file) values('$cource','$branch','$stream','$semester','$type','$year','$Filename')";
        $res=mysqli_query($mysqli,$upload);
        //message code
        if($res)
        {
        echo "<script type='text/javascript'> myFunction2();</script>";
        }
            

                                      
                                  }
                              
                              

                          }
                          
                          ?>

                        </div>
                         </div>
        </div>
                        </div>
                         </div>
                         </div>
        </form>
        
        </center>
    </body>
</html>