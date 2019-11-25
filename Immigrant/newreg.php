<?php


$fname=filter_input(INPUT_POST,'tfname');
$mname=filter_input(INPUT_POST,'tmname');
$lname=filter_input(INPUT_POST,'tlname');
// $img=filter_input(INPUT_POST,'timg');
$img=addslashes(file_get_contents($_FILES["timg"]["tmp_name"]));
// $img=file_get_contents($_FILES['timg']['temp_name']);
// $img=$_FILES["timg"]["temp_name"];
$dob=filter_input(INPUT_POST,'tdob');
$blood=filter_input(INPUT_POST,'tblood');
$aadhar=filter_input(INPUT_POST,'taadhar');
$house=filter_input(INPUT_POST,'thouse');
$town=filter_input(INPUT_POST,'ttown');
$dist=filter_input(INPUT_POST,'tdist');
$state=filter_input(INPUT_POST,'tstate');
$skill=filter_input(INPUT_POST,'tskill');
$curradr=filter_input(INPUT_POST,'tcurradr');
$mob=filter_input(INPUT_POST,'tmob');
$arrival=filter_input(INPUT_POST,'tarrival');
$cases=filter_input(INPUT_POST,'tcrime');
$father=filter_input(INPUT_POST,'tfather');
$mother=filter_input(INPUT_POST,'tmother');
$edu=filter_input(INPUT_POST,'tedu');
$agent=filter_input(INPUT_POST,'tagent');
$agentid=filter_input(INPUT_POST,'tagentid');
$flag=0;


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
      $table="immigrant_data";
      $query="INSERT INTO $table VALUES (NULL,'$fname','$mname','$lname','$img','$dob','$blood',$aadhar,'$house','$town','$dist','$state','$skill','$curradr',$mob,'$arrival','$cases','$father','$mother','$edu','$agent',$agentid,$flag) ";
      // $q=$con->query($query);
      $q=mysqli_query($con,$query);
    
      if( $q)
	 //if($user=="ADMIN123" && $pass=="password")
     //if(mysqli_num_rows($q)){
        {
            echo "<script type='text/javascript'>alert('Successfully Registered For Bengali Card..!'); location='New%20folder/index1.html';</script>";
	       //header("location:userpage.html");
      }
      else{
            echo "<script type='text/javascript'>alert('Error Occured Connection Time Out.Try Again..!'); location='New%20folder/index1.html';</script>";
      }//mysqli_free_result($result);
    }

?>