<?php

include("connect1.php");

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "select * from registration where email='$email' and password='$password' ";
    $result= mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count= mysqli_num_rows($result);

    if($count==1){
        header("Location:proj1.html");
        //echo '<div class="alert alert-success" role="alert">
        //<h4 class="alert-heading">Logged in successfully</h4>
        //<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        //<hr>
        //<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      //</div>';
        
    }
    else{
       // echo '<div class="alert alert-danger" role="alert">
        //<h4 class="alert-heading">Incorrect username or password</h4>
        //<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        //<hr>
        //<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      //</div>';        
    }
}

?>
