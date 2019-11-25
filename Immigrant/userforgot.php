<?php



$user=filter_input(INPUT_POST,'tuname');
$mob=filter_input(INPUT_POST,'tmob');

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
      $table="userlogin";
      $query="SELECT mobile from $table where mobile='$mob' and username='$user' ";
      $q=$con->query($query);
      $a=mysqli_fetch_array($q,MYSQLI_NUM);
      $dmob=$a[0];
      if( $mob==$dmob)
      {
        $query="UPDATE $table SET password='$pass' where  mobile='$mob' and username='$user' ";
        $q=$con->query($query);
        if($q)
        {
          echo "password changed";
          header("location:userloginpage.html");
        }
        
      }      
      else{
          echo "error";
      }
    }
?>