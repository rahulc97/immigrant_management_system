<?php


$id=filter_input(INPUT_POST,'tid');
$skill=filter_input(INPUT_POST,'tskill');

$house=filter_input(INPUT_POST,'thouse');
$town=filter_input(INPUT_POST,'ttown');
$dist=filter_input(INPUT_POST,'tdist');
$state=filter_input(INPUT_POST,'tstate');

$mob=filter_input(INPUT_POST,'tmob');

$cases=filter_input(INPUT_POST,'tcases');
$edu=filter_input(INPUT_POST,'tedu');
$flag=-1;


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
      $table="immigrant_data_update";
      $query="INSERT INTO $table VALUES(NULL,$id,'$skill','$house','$town','$dist','$state',$mob,'$cases','$edu',$flag) ";
      $q=$con->query($query);
    // $a=mysqli_fetch_array($q,MYSQLI_BOTH);
      //echo $a[1];
      if( $q)
      
      {
          echo "<script type='text/javascript'>alert('Successfully Registered for  Bengali Card Updation..!'); location='New%20folder/index1.html';</script>";
          
    }
    else{
          echo "<script type='text/javascript'>alert('Error Occured Connection Time Out.Try Again..!'); location='New%20folder/index1.html';</script>";
    }
}


?>