<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>library system</title>
    <style>

       
        .btn-primary {
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.1);
        }
    </style>


    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

</head>

<body>



    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12" style="display: flex; justify-content: space-between; align-items: center;padding-top:20px;padding-bottom:20px">
                        <h1 class="page-header" style="color:black; margin: 0; margin-left: auto; margin-right: auto;">Edit Book</h1>
                        <form action="editview.php" method="post" style="margin: 0;">
                            <button type="submit" class="btn btn-primary" style="border-radius: 20px; border-radius: 20px; background-color: #337ab7; color: white; padding: 5px 15px; border: none; text-transform: uppercase; font-weight: bold;">
                                <span class="glyphicon glyphicon-arrow-right"></span>
                            </button>
                        </form>
                    </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                
                                
                                <?php
include 'dbconnect.php';
$isbn=$_GET['isbn'];
$qry= "select * from books where isbn='$isbn'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
    
?>                                    
<form role="form" action="edit.php" method="post">
                                        <br><br>
 
                                         <div class="form-group" style="display: flex; flex-direction: row; direction: rtl;">
                                          <label style="flex: 1; padding: 7px;margin-right:35px;">ISBN <span style="color: red;">*</span></label> 
                                            <input  style="text-align: center;flex: 1; margin-left: 440px;" class="form-control" name="isbn" type="number" value='<?php echo $row['isbn']; ?>' required><br><br>
                                              
                                            </input>
                                        </div><br>
                                        <div class="form-group" style="display: flex; flex-direction: row; direction: rtl;">
                                          <label style="flex: 1; padding: 7px;margin-right:35px;">العنوان <span style="color: red;">*</span></label> 
                                            <input  style="text-align: center;flex: 1; margin-left: 440px;" class="form-control" name="title" type="text" value='<?php echo $row['title']; ?>' required><br><br>
                                              
                                            </input>
                                        </div><br>

                                                        <div class="form-group" style="display: flex; flex-direction: row; direction: rtl;">
                                          <label style="flex: 1; padding: 7px;margin-right:35px;">المؤلف <span style="color: red;">*</span></label> 
                                            <input  style="text-align: center;flex: 1; margin-left: 58px;" class="form-control" name="author" type="text" value='<?php echo $row['author']; ?>' required><br><br>
                                                                                                


                                          <label style="flex: 0.5; padding: 7px;margin-right:35px;">الناشر <span style="color: red;">*</span></label> 
                                            <input  style="text-align: center;flex: 1; margin-left: 80px;margin-top: 2px;" class="form-control" name="publisher" type="text" value='<?php echo $row['publisher']; ?>' required><br><br>
                                                                            

                                        </div><br>
                                       
            

                                        <div class="form-group" style="display: flex; flex-direction: row; direction: rtl;">
                                          <label style="flex: 1; padding: 7px;margin-right:35px;">التصنيف <span style="color: red;">*</span></label> 
                                            <select id="Bagtype" style="text-align:center; ;flex: 1; margin-left: 453px;" class="form-control"; name="category"; value='<?php echo $row['category']; ?>' required>
                                                
                                                <option value="History">History</option>
                                                <option value="Economics">Economics</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Business">Business</option>
                                                <option value="Biography">Biography</option>
                                                <option value="Romance">Romance</option>
                                            </select>
                                        </div><br>

                                          <div class="form-group" style="display: flex; flex-direction: row; direction: rtl;">
                                          <label style="flex: 1; padding: 7px;margin-right:35px;">تاريخ النشر <span style="color: red;">*</span></label> 
                                            <input  style="text-align: center;flex: 1; margin-left: 453px;" class="form-control" name="pub_date" type="date" value='<?php echo $row['pub_date']; ?>' required><br><br>
                                              
                                            </input>
                                        </div><br>
                                      

                                        


             
                                          
       

                                         
                                            

                                           
                                            
                                          
                         
                                     
                                        
                                       


                                        <input type="hidden" name="isbn" value="<?php echo $row['isbn'];?>">

                                        <div style="display: flex; justify-content: center;">




                                            <button type="submit" class="btn btn-primary" style="border-radius: 20px; margin-top:60px; background-color: #337ab7; color: white; padding: 10px 15px; border: none;font-size:13px;">
                                                تعديل الكتاب
                                            </button>
                                        </div>




                                    </form>





                                    
                                </div>
    <?php
}
?>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>



</html>