<?php

if(isset($_GET['isbn'])){
$isbn=$_GET['isbn'];

include 'dbconnect.php';


$qry="delete from books where isbn=$isbn";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:delete_book.php');
}else{
    echo"ERROR!!";
}
}
?>