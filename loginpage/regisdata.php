<?php

$con=mysqli_connect("localhost:3307","root","","rigester");

if(mysqli_connect_error())
{

echo"<script>alert('cannot connect to the database');</script>";
exit();


}
if(isset($_POST['login']))

{

$query="INSERT INTO rigis(userid,email,password)values('$_POST[userid]','$_POST[email]','$_POST[password]')";

	   if(mysqli_query($con,$query))
        {
        #if data inserted successfully
        echo"
         <script>
         alert('Login successfull');
         window.location.href='index.php';
         </script>
    ";
        }
        else
        {
            #if data cannot inserted 
            echo"
            <script>
            alert('Cannont Run Query');
            window.location.href='index.php';
            </script>
       "; 
    
        }
    
}


?>