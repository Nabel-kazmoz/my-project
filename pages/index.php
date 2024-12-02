<?php

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}

include "dbconnect.php";
$qry="SELECT category, count(*) as number FROM books GROUP BY category";
$result= mysqli_query($conn,$qry);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>library system</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff); 
           function drawStuff()  
           {  
                var data = new google.visualization.arrayToDataTable([  
                          ['category','Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["category"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                         var options = {
                            height:420,
          width: 700,
          legend: { position: 'none' },
          
          
          bar: { groupWidth: "50%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
           </script>
           

</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header"> Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-2">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     
                                
                                        <?php include 'counter/dashboardcount.php';?> 

                                    <!-- <div class="huge">26</div> -->
                                    <div>Total Books</div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="view_book.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                

            </div>
            <br>
            <br>
            <!-- /.row -->
            <div class="row">
			
				<div class=".col-lg-12">
				
				<div id="content">
					 
					  <div class="container-fluid">
						
						<div class="row-fluid">
						  
						  <div class="span12">
							
    <div id="top_x_div" style="width: 800px; height: 600px;"></div>

						  </div>
						</div>
					  </div>
				</div>
			
				</div>

           </div>
                <!-- /.col-lg-8 -->
                
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>





</html>
