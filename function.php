<?php

   function show($idno){
   	{
     include('dbconnection.php');
     $sql="SELECT * FROM `student` WHERE `rollno`='$idno' ";

     $run=mysqli_query($con,$sql);

     if(mysqli_num_rows($run)>0)
     {
          $data=mysqli_fetch_assoc($run);

          
              echo $data['name'];
         
     }
     else
     {
     	echo "<script> alert('No strundet found.'); </script>";
     }
   }
?>