<?php

include('include/db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>CET PG ASSOCIATION</title> 
<meta name="description" content="Cet Pg Association"/>
	<meta name="keywords" content="cet,cetpg" />
	<meta name="author" content="Geo and Faizal"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
    <link href="../css/button.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<style type="text/css">
		



		.link {
		background: #ffffff;
		border: solid 1px #e6e6e6;
		border-radius: 2px;
		display: inline-block;
		height: 100px;
		line-height: 100px;
		margin: 5px;
		position: relative;
		text-align: center;
		vertical-align: middle;
		width: 100px;
}

.link span {
		background: #f2594b;
		border-radius: 4px;
		color: #ffffff;
		display: inline-block;
		font-size: 11px;
		font-weight: 700;
		line-height: normal;
		padding: 5px 10px;
		position: relative;
		text-transform: uppercase;
		z-index: 1;
}

.link span:last-child {
		margin-left: -20px;
}

.link:before,
.link:after {
		background: #ffffff;
		border: solid 3px #9fb4cc;
		border-radius: 4px;
		content: '';
		display: block;
		height: 35px;
		left: 50%;
		margin: -17px 0 0 -12px;
		position: absolute;
		top: 50%;
		/*transform:translate(-50%,-50%);*/
		
		width: 25px;
}

.link:hover:before,
.link:hover:after {
		background: #e2e8f0;
}
/*a:before{transform:translate(-30%,-60%);}*/

.link:before {
		margin: -23px 0 0 -5px;
}

.link:hover {
		background: #e2e8f0;
		border-color: #9fb4cc;
}

.link:active {
		background: #dae0e8;
		box-shadow: inset 0 2px 2px rgba(0, 0, 0, .25);
}

.link span:first-child {
		display: none;
}

.link:hover span:first-child {
		display: inline-block;
}

.link:hover span:last-child {
		display: none;
}
/* custom code for the demo */


	</style>
	<!-- end: CSS -->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="jquery.min.js"></script>
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
    
    
    
    
    
    
    
    
    
</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="../index.html"><img src="../img/logo.png" alt="Logo"></a>
						<br>
                    <b class='headingcet'>CET PG ASSOCIATION</b>
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="../index.html">Home</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="../sportscup.html">Spotrs Cup</a></li>
			                  				<li><a href="../tharangam.html">Tharagam</a></li>
			                 
			                			</ul>
			              			</li>
									<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="questionpaper.php">Question Papers</a></li>
			                  				<li><a href="../ebook.html">E-Books</a></li>
			                  				<li><a href="../edirect.html">E-Science Direct</a></li>
			                  				<li><a href="../project.html">Projects</a></li>
			                			</ul>
			              			</li>
									<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="../mca.html">MCA</a></li>
			                  				<li><a href="../mba.html">MBA</a></li>
                                            <li><a href="../march.html"> M.ARCH</a></li>
			                  				<li><a href="../mtech.html"> M.TECH</a></li>
                                          
			                			</ul>
			              			</li>
                                    
                                    <li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="../bog.html">BOG</a></li>
			                  			
                                            <li><a href="../bylaw.html">By Law</a></li>
                                          
			                			</ul>
			              			</li>
			              			<li><a href="../helpdesk.html">Helpdesk</a></li>
			              			
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-book ico-white"></i>Question Papers</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
			<!--start: Row -->
	    	<div class="row">
		
				<div class="span8">
					
					<!-- start: About Us -->
					
						
					<!-- end: History -->

                    
                    
                    
      
                    
                    
    
                    <center>
                    <form method="post"  enctype="multipart/form-data" > 
		
		 <div>
                       <div>Cource</div>
					<select name="cource" id="country"  required>
					<option>Select Cource</option>
					
                    </select>

               </div>  

                    
					
                  <div>
                    <div>Branch</div>
    
                    <select name="branch" id="state"  required>
                    <option value="">Select  Branch</option>                            
                    </select>
                     
                        <div>Stream</div>
                      
                    <select name="stream" id="city" autofocus="autofocus" required>
                    <option value="-1">Select  Stream<option>
                    </select>
                        </div>   
                    
                <div>
                   <div>Semester</div>
                    
                    <select name="semester" required>
                    <option value="-1">Select semester</option>
                      <?php
                        for($i=1;$i<=6;$i++)
                        echo "<option value='$i'>$i</option>";
                        ?>
                        
                    </select>
                </div>
                    <div>
                <div>Question Type</div>
                    
                    <select name="type" required>
                    <option value="-1">Select Type</option>
                        <option value="end_sem">End-Semester</option>
                        <option value="series">Series Exam</option>
                        
                    </select>
                </div>
                          
                  <div>
                      <input  type="submit"  name="search" class="button button5" value="Search">
                      
                        </div>
                          
                         
                 
                    
                    
					<!-- start: Team -->	
					
					<!-- end: Team -->
					
					
				
                        </form>
				
                    </center>
				
                    </div>	
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->
				
		
        
        <?php
        
         if(isset($_POST["search"]))
                            {
             
             
                                 $type=$_POST["type"];
                                   if($type=="end_sem")
                                  {
                                  
                                 $cource=$_POST["cource"];
                                 $branch= $_POST["branch"];
                                 $stream=$_POST["stream"];
                                 
                                 $semester=$_POST["semester"];
$result=mysqli_query($mysqli,"select * from tbl_upload where cource_id='$cource' and branch_id='$branch' and stream_id='$stream' and semester='$semester' and type='$type'");
$l=mysqli_num_rows($result);
           if($l>0)
           {
               
         
while($row=mysqli_fetch_array($result))
{     
    $sem=$row[4];
      $year=$row[6];
    $file=$row[7];
                       
                  echo "<center>";
                   
    echo "<div>";
		echo "<a href='../admin/qpupload/end_sem/$file' download class='link'><span>Download</span><span>PDF</span></a>";
		
echo "</div>";
             echo "</center>";
                   
         }
           }
         }elseif($type=="series")
                                   {
                                       
             
              $cource=$_POST["cource"];
                                 $branch= $_POST["branch"];
                                 $stream=$_POST["stream"];
                                 
                                 $semester=$_POST["semester"];
$result=mysqli_query($mysqli,"select * from tbl_upload where cource_id='$cource' and branch_id='$branch' and stream_id='$stream' and semester='$semester' and type='$type'");
        $l=mysqli_num_rows($result);
           if($l>0)
           {

while($row=mysqli_fetch_array($result))
{
    $year=$row[6];
    $file=$row[7];

    echo "<center>";
                   
    echo "<div>";
		echo "<a href='../admin/qpupload/series/$file' download class='link'><span>Download</span><span>PDF</span></a>";
		
echo "</div>";
             
                        
 }
                                       
        }
    
                                   }
         }
        ?>
		<!--end: Container-->	

	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>About Us</h3>
					<p>
						PG Association is a group of around 1300 PG students currently pursuing their course at CET. It is formed under the leadership of the PG Representative of College Union. It’s vision is to promote the interests of PG students and support technical, research, academic, social, cultural and job oriented activities of the students.
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					
					
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					
                    <h3>Follow Us!</h3>
                    
					<ul class="social-grid">
						
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="https://www.facebook.com/cetpgassociation"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
					
						
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
					<form id="newsletter">
						<h3>Email us</h3>
						<p>Please leave us your email</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form>
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
    
    <div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				 Copyright &copy; 2020 CET PG ASSOCIATION

			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.8.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/flexslider.js"></script>
<script src="../js/carousel.js"></script>
<script src="../js/jquery.cslider.js"></script>
<script src="../js/slider.js"></script>
<script defer="defer" src="../js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>