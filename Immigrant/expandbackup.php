<!DOCTYPE html>
<html>
    <head>
        <title >
           Approve New Registration  Page
        </title>

        <link  rel="icon"  href="img.ico" >
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_newregpage.css">
        <link rel="stylesheet" href="style.css">

        
       
    </head>

    <body bgcolor=f3f3f3>
            <div class="div_class_register" align="center">
            <form method="POST" action="approve.php" class="form1" >
            <div class="form_div_class_register">
                           
            <br><br>
            <img src="ko.png" height="150px">
            <br>
            <br>
            <!-- <div class="forgot_icon"></div> -->
            <!-- <label for="uname"><b>User name</b></label> -->
            <div class="option"  >
                                 
                           
            <br>
            <br>
            <div id="div1">
            <div  class="row">
                 <div class="main" >


<?php


$id=filter_input(INPUT_POST,'id');
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
      $table2="criminal_database";
      $query="SELECT * from $table where id=$id";
      $q=$con->query($query);
     
      while($a=mysqli_fetch_array($q,MYSQLI_BOTH))
                {
                    echo "<label> Bengali Id  :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['id']." name='tid' > &nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label>First Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['fname']." name='tfname' ><br>";
                    echo "<label> Midddle Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['mname']." name='tmname' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Last Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['lname']." name='tlname' ><br>";

                    echo "</div><div class='imgdiv' class='side' align='left' style='background-color: rgb(235, 235, 224); border: 3px solid #d3d3d3; width: 120px; height: 120px;' >
                    <img src='data:image/jpeg;base64,".base64_encode($a[4])." ' height='120' width='120' /></div></div>
                    <div class='other_input'>";



                    echo "<label> Date of Birth  :  &nbsp;&nbsp;</label>";
                    echo "<input type='date'   value=".$a['dob']." name='tdob' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Blood  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['blood']." name='tblood' ><br>";
                    echo "<label> Aadhar No  :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['aadhar']." name='taadhar' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> House Name (Curr)  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['house']." name='thouse' ><br>";
                    echo "<label> Town  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['town']." name='ttown' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> District  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['dist']." name='tdist' ><br>";
                    echo "<label> State  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['state']." name='tstate' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Skill  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['skill']." name='tskill' ><br>";
                    echo "<label> Permanent Address  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['curradr']." name='tcurradr' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Mobile No  :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['mob']." name='tmob' ><br>";
                    echo "<label> Arrival Date  :  &nbsp;&nbsp;</label>";
                    echo "<input type='date'   value=".$a['arrival']." name='tarrival' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Cases  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['cases']." name='tcases' ><br>";
                    $aadhar=$a['aadhar'];
                    $query2="SELECT * from $table2 where aadhar=$aadhar";
                    $q2=$con->query($query2);
                    $no=mysqli_num_rows($q2);
                    if($no>0)
                    {
                    $a2=mysqli_fetch_array($q2,MYSQLI_BOTH);
                    echo "<label> Cases  From Database :  &nbsp;&nbsp;</label>";
                    $data=$a2['ipc']." - ".$a2['descr'];
                    
                    echo "<label        >".$data." </label>&nbsp;&nbsp;&nbsp;&nbsp;";
                

                    echo "<label> Father's Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['father']." name='tfather' ><br>";
                    echo "<label> Mother's Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['mother']." name='tmother' >";
                    echo "<label> Educational Qualification  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['edu']." name='tedu' ><br>";
                    echo "<label> Agent Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['agent']." name='tagent' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    
                    echo "<label> Agent Id :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['agentid']." name='tagentid' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo"</div>";
                    }

                    else{
                    echo "<label> Father's Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['father']." name='tfather' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Mother's Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['mother']." name='tmother' ><br>";
                    echo "<label> Educational Qualification  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['edu']." name='tedu' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Agent Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['agent']." name='tagent' ><br>";
                    echo"</div>";
                    echo"<div class='other_input'>";
                    echo "<label> Agent Id :  &nbsp;&nbsp;</label>"; 
                    echo "<input type='tel'   value=".$a['agentid']." name='tagentid' >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "</div>";
                    }
                   
                   echo" <form action='approve.php' method='POST'>
				     <input type='hidden' name='action' value='1'>
					 <input type='hidden' name='idno' value='$a[0]' >
				     <input type='submit' name='bview' class='button_register_1' value='            APPROVE' align='center'> 
                     </form> <form action='approve.php' method='POST'>
				     <input type='hidden' name='action' value='2'>
					 <input type='hidden' name='idno' value='$a[0]' >
				     <input type='submit' name='bview' class='button_register_1' value='              REJECT' align='center'> 
					 </form>";



                }
            }
                ?>