<?php


$user=filter_input(INPUT_POST,'tuname');
$pass=filter_input(INPUT_POST,'tpassword');

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
      $query="SELECT password from $table where password='$pass' and username='$user' ";
      $q=$con->query($query);
    // $a=mysqli_fetch_array($q,MYSQLI_BOTH);
      //echo $a[1];
      $a=mysqli_fetch_array($q,MYSQLI_NUM);
//printf ("%s ",$row[0]);
      //mysqli_free_result($result);
      $dpass=$a[0];
      if( $pass==$dpass)
	 //if($user=="ADMIN123" && $pass=="password")
     //if(mysqli_num_rows($q)){
        {
	       header("location:New%20folder/index1.html");
      }
      else{
echo "error";
      }//mysqli_free_result($result);
    }

?>