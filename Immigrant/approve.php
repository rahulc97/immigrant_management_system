
<?php

$action=filter_input(INPUT_POST,'action');
$idno=filter_input(INPUT_POST,'idno');



$fname=filter_input(INPUT_POST,'tfname');
$mname=filter_input(INPUT_POST,'tmname');
$lname=filter_input(INPUT_POST,'tlname');
// $img=filter_input(INPUT_POST,'timg');
// $img=addslashes(file_get_contents($_FILES["timg"]["tmp_name"]));
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
$cases=filter_input(INPUT_POST,'tcases');
$father=filter_input(INPUT_POST,'tfather');
$mother=filter_input(INPUT_POST,'tmother');
$edu=filter_input(INPUT_POST,'tedu');
$agent=filter_input(INPUT_POST,'tagent');
$agentid=filter_input(INPUT_POST,'tagentid');
// $pass=filter_input(INPUT_POST,'tpassword');

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
      $table2="immigrant_data_update";
      if($action==1)
      {
      $query="UPDATE $table SET id=$idno,fname='$fname',mname='$mname',lname='$lname',dob='$dob',blood='$blood',aadhar=$aadhar,
      house='$house',town='$town',dist='$dist',state='$state',skill='$skill',curradr='$curradr',mob=$mob,arrival='$arrival',
      cases='$cases',father='$father',mother='$mother',edu='$edu',agent='$agent',agentid='$agentid',flag=1  where id=$idno";
      $q=$con->query($query);
      if( $q)
      
       {
           echo "<script type='text/javascript'>alert('Successfully Approved Bengali Card..!'); location='newreqpage.php';</script>";
          
     }
     else{
           echo "<script type='text/javascript'>alert('Error Occured Connection Time Out.Try Again..!'); location='newreqpage.php';</script>";
     }
      }
      else if($action==2)
      {
      $query="UPDATE $table SET flag=-2 where id=$idno";
      $q=$con->query($query);
      if( $q)
      
       {
           echo "<script type='text/javascript'>alert('Successfully Rejected Bengali Card..!'); location='newreqpage.php';</script>";
           
     }
     else{
           echo "<script type='text/javascript'>alert('Error Occured Connection Time Out.Try Again..!'); location='newreqpage.php';</script>";
     }
      }
      else if($action==3)
      {
      $query="UPDATE $table SET id=$idno,fname='$fname',mname='$mname',lname='$lname',dob='$dob',blood='$blood',aadhar=$aadhar,
      house='$house',town='$town',dist='$dist',state='$state',skill='$skill',curradr='$curradr',mob=$mob,arrival='$arrival',
      cases='$cases',father='$father',mother='$mother',edu='$edu',agent='$agent',agentid='$agentid',flag=1  where id=$idno";
      $q=$con->query($query);
      $query="DELETE FROM $table2 where bid=$idno";
      $q=$con->query($query);
      if( $q)
      
       {
           echo "<script type='text/javascript'>alert('Successfully Approved Bengali Card Updation..!'); location='update_req_view.php';</script>";
          
     }
     else{
           echo "<script type='text/javascript'>alert('Error Occured Connection Time Out.Try Again..!'); location='update_req_view.php';</script>";
     }
      }
      else if($action==4)
      {
      $query="DELETE FROM $table2 where bid=$idno";
      $q=$con->query($query);
      if( $q)
      
       {
           echo "<script type='text/javascript'>alert('Successfully Rejected Bengali Card Updation..!'); location='update_req_view.php';</script>";
           
     }
     else{
           echo "<script type='text/javascript'>alert('Error Occured Connection Time Out.Try Again..!'); location='update_req_view.php';</script>";
     }
      }

      
      
	      // header("location:newreqpage.php");
      


}

?>