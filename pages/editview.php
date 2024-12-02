<html>

<head>


<title>library system</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">

<style>
tr {
	background-color:#337ab7;
	text-align:center;
}
th {
	text-align:center;
	color:white;
}

</style>

</head>


<body>
<div id="wrapper">

<?php include 'includes/nav.php'?>

<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Edit Book Detail</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of available books
						
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from books";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
						<tr>
							<th>isbn</th>
							<th>العنوان</th>
							<th>المؤلف</th>
							<th>الناشر</th>
							<th>التصنيف</th>
							<th>تاريخ النشر</th>
							<th><i class='fa fa-pencil'></i></th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['isbn']."</td>
						  <td>".$row['title']."</td>
						  <td>".$row['author']."</td>
						  <td>".$row['publisher']."</td>
						  <td>".$row['category']."</td>
						  <td>".$row['pub_date']."</td>
						  
						  <td><a href='editform.php?isbn=".$row['isbn']."'><i class='fa fa-edit' style='color:green'></i></a></td>

						</tr>
						</tbody>";
						}

						?>
						</table>
									
				</div>
				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>

</div>



  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>


</html>