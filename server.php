<?php

// echo 'server.php page';
$roll =$_GET['Roll'];
$name=$_GET["Name"];
$city=$_GET['City'];
$class=$_GET['class'];
$Total_marks=$_GET['Total_marks'];


// echo $data.'<br>';
// echo $pass;
//host,user,password.name of data base
$host ="localhost";
$user="root";
$password="";
$db_name="test";
$con=mysqli_connect($host,$user,$password,$db_name);
if($con){
    // echo '<br>sucess';
    $query="INSERT INTO `student`(`Roll`, `Name`, `City`, `Class`, `Total_Marks`) VALUES ('$roll','$name','$city','$class','$Total_marks')";
    $result=mysqli_query($con,$query);
    if($result){
        echo 'sucess';

    }
    else{
        echo 'uplode fail';
    }
}
else{
    echo '<br>something went wrong';
}


?>