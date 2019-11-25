<?php

//if(isset($_POST['submit']))
  // {


      $name=filter_input(INPUT_POST,'tname');
      $user=filter_input(INPUT_POST,'tuname');
      $mob=filter_input(INPUT_POST,'tmob');
      $email=filter_input(INPUT_POST,'temail');
	$pass=filter_input(INPUT_POST,'tpassword');
      $repass=filter_input(INPUT_POST,'trepassword');
      
      $dbusername="root";
      $dbpassword="";
      $dbhost="localhost";
      $dbname="immigrant";

      $con= new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
      if(mysqli_connect_error())
      {
            die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_error());
      }
      else
      {
            $table="adminlogin";
            $query="INSERT INTO $table VALUES(NULL,'$name','$user',$mob,'$email','$pass') ";
            $q=$con->query($query);
            if($q)
            {
                  header("location:adminloginpage.html");
            }
      }
?>