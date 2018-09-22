<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <script src="http://code.jquery.com/jquery.com/jquery-1.10.1.min.js"></script>
    <script src="js/menu.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KLEF STUDENT INFO</title>

    <style> 
input[type=text] {
    width: 50%;    
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    height: 50px;
}
input[type=submit]{
     width: 130px;
     height: 47px;


}
input[type=submit]:hovor{
    background-color: green;
}

.id{
    padding-left: 10px;
}
.top{
    float: left;
    padding-left: 50px;
    padding-top: 20px;
    font-size: 20px;

}


</style>
</head>
<body scroll="yes" style="overflow: auto">
    
   
    <div class="sidebar_menu">
        <center>
         	    <a href="index.php"><h1 class="boxed_item"> 
         	    <img class="boxed_image" src="klu.png"> 
         	    <b title="K L University">K L U </b><span class="logo_bold">niversity</span></h1></a>
         	    <h2 class="logo_title"> Koneru Lakshmaiah Education Foundation</h2>
         </center>

         <ul class="nav_selection">
         <a href="index.php"><li class="nav_item" title="HOME"> HOME</li>
         <a href="studentinfo.php"><li class="nav_item" title="STUDENT INFO"> STUDENT INFO</li>
         <a href="studentinfo.php"><li class="nav_item" title="FACULTY INFO"> FACULTY INFO</li>
         <a href="about.php"><li class="nav_item" title="ABOUT">  ABOUT </li> 
         <a href="#"><li class="nav_item" title="CONTACT"> CONTACT </li></ul>
         
    </div>
    <div class="data" style="overflow: auto;">
    <div class="id" style="overflow: auto;">    
    <form action="studentinfo.php" method="post">
    
  <input type="text" name="search" placeholder="Search..">
   <input type="submit" name="submit" value="Search">
</form>
<br>
<hr>
</div>
<br>
<div class="top">
    
    <?php
    
    if(isset($_POST['submit']))
    {
        $idno=$_POST['search'];
        include('dbconnection.php');
        
        $sql="SELECT * FROM `student` WHERE `rollno`='$idno' ";
        
        $s="SELECT rollno  FROM student ";

        
     $run=mysqli_query($con,$sql);

     if(mysqli_num_rows($run)>0)
     {
          $data=mysqli_fetch_assoc($run);

               $id=$data['rollno'];
               $nam=$data['name'];
               $pcon=$data['pcont'];

               $dirname = "photos/$id";
               $images = glob($dirname."*.jpg");
               
               foreach($images as $image) {
                    echo '<img width ="250px" height="200px" src="'.$image.'"/> ';
                }

                echo "<br>"."<br>";
                echo "<table border='1'>";
                 
                   echo "<tr>";
              echo "ID.NO : ".$id ;
              echo "</tr>";
              echo "<br>"."<br>"."<tr>";
              echo "NAME: ".$nam;
              echo "</tr>"."<br>"."<br>"."<tr>";
              echo "CONTACT: ".$pcon;
              echo "</tr>"."<br>"."<br>"."<br>"; 
              echo "</table>"."<hr>"."<br>";
     
              
              include('timetable.php');
              

           
                        
    }
     else
     {
        echo "<script> 
        alert('NO RECORD WAS FOUND'); </script>";
     }
}
     ?>
        
  </div>
  

          

    
      
    


</div>



</div>
   

    
</body>
</html>
