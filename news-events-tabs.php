<?php
include("admin/database_conn/conn.php");
?>


<script type="text/javascript" src="event/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="event/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="event/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="event/news-events-tabs.css">

<div class="container">  

  <h3>EVENTS & NOTIFICATIONS</h3>
  
  <hr>
  <div class="row">
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      <div class="searchForm type2">
        
      </div>
    </div>
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      
    </div>  
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-4 col-lg-pull-8 col-md-4 col-md-pull-8">
      <ul class="nav nav-pills" role="tablist">
        <li class="active">
          <a data-toggle="tab" href="#tab1" role="tab">EVENTS</a>
        </li>
        <li>
          <a data-toggle="tab" href="#tab2" role="tab">NOTIFICATIONS</a>
        </li>
      </ul>
    </div>
  </div><!-- / row -->
  <hr>
  <div class="tab-content">
    <div class="tab-pane fade in active" id="tab1">
      <div class="row">
        <div class="col-md-6">
            <?php
    
            $result=mysqli_query($conn,"select * from tbl_events");

while($row=mysqli_fetch_array($result))
{
    $title=$row[1];
    $sd=$row[2];
    $time=$row[4];
    $day=$row[5];
    $month=$row[6];
    
?>
            
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em><?php echo $day; ?></em><?php echo $month; ?></span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#"><?php echo $title; ?></a>
              </h4>
              <div class="meta-data">
                <span class="longDate"><?php echo $time; ?></span> 
              </div>
              <p>
               <?php echo $sd; ?>
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
            <?php
         
            
            }
            ?>
          
            
            
            
        </div><!-- / .col-md-6 -->
        
      </div><!-- / row -->
      <div class="text-center">
        <br>
        <a class="btn btn-default" href="#">SEE ALL </a>
      </div>
    </div>
      
      
      
    <div class="tab-pane fade" id="tab2">
      <div class="row">
        <div class="col-md-6">
            
            <?php
    
            $result1=mysqli_query($conn,"select * from tbl_notifications");

while($row1=mysqli_fetch_array($result1))
{
    $title1=$row1[1];
    $sd1=$row1[2];
    $filepath=$row1[3];
    
?>
            
            
          <div class="blogPost--small">
            <div class="media">
              
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="admin/pages/Npdf/<?php echo $filepath;?>" download><?php echo $title1; ?></a>
                </h4>
                <p>
                 <?php echo $sd1; ?>
                </p>
                
              </div>
            </div>
          </div><!-- / blogPost -->
            <?php
    
    
}
            ?>
            
         
        </div><!-- / .col-md-6 -->
        
        <div class="text-center">
          <br>
          <a class="btn btn-default" href="#">SEE ALL </a>
        </div>
      </div>
    </div>
  </div>
              
</div>              