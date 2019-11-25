<!DOCTYPE html>
<html>
    <head>
        <title >
           Search  Page
        </title>

        <link  rel="icon"  href="img.ico" >
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_newregpage.css">
        <link rel="stylesheet" href="style.css">

        
       
    </head>

    <body bgcolor=f3f3f3>
            <div class="div_class_register" align="center">
            <form  class="form2" >
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
      $query="SELECT * from $table where id=$id";
      $q=$con->query($query);
      while($a=mysqli_fetch_array($q,MYSQLI_BOTH))
                {
                    echo "<label> Bengali Id  :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['id']." name='tid' readonly> &nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label>First Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['fname']." name='tfname' readonly ><br>";
                    echo "<label> Midddle Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['mname']." name='tmname' readonly >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Last Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['lname']." name='tlname' readonly><br>";

                    echo "</div><div class='imgdiv' class='side' align='left' style='background-color: rgb(235, 235, 224); border: 3px solid #d3d3d3; width: 120px; height: 120px;' >
                    <img src='data:image/jpeg;base64,".base64_encode($a[4])." ' height='120' width='120' /></div></div>
                    <div class='other_input'>";



                    echo "<label> Date of Birth  :  &nbsp;&nbsp;</label>";
                    echo "<input type='date'   value=".$a['dob']." name='tdob'readonly >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Blood  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['blood']." name='tblood' readonly ><br>";
                    echo "<label> Aadhar No  :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['aadhar']." name='taadhar' readonly>&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> House Name(Curr):  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['house']." name='thouse' readonly ><br>";
                    echo "<label> Town  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['town']." name='ttown' readonly>&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> District  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['dist']." name='tdist' readonly ><br>";
                    echo "<label> State  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['state']." name='tstate' readonly>&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Skill  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['skill']." name='tskil' readonly ><br>";
                    echo "<label> Permanent Address  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['curradr']." name='tcurradr' readonly>&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Mobile No  :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['mob']." name='tmob' readonly ><br>";
                    echo "<label> Arrival Date  :  &nbsp;&nbsp;</label>";
                    echo "<input type='date'   value=".$a['arrival']." name='tarrival' readonly>&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Cases  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['cases']." name='tcases' readonly><br>";
                    echo "<label> Father's Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['father']." name='tfather' readonly >&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Mother's Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['mother']." name='tmother' readonly><br>";
                    echo "<label> Educational Qualification  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['edu']." name='tedu' readonly>&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "<label> Agent Name  :  &nbsp;&nbsp;</label>";
                    echo "<input type='text'   value=".$a['agent']." name='tagent' readonly><br>";
                    echo"</div>";
                    echo "<label> Agent Id :  &nbsp;&nbsp;</label>";
                    echo "<input type='tel'   value=".$a['agentid']." name='tagentid' readonly>&nbsp;&nbsp;&nbsp;&nbsp;";
                   
                //    echo" <form>
				//      <input type='hidden' name='action' value='1'>
				// 	 <input type='hidden' name='id' value='$a[0]' >
				//      <input type='submit' name='bview' class='button_register_1' value='            APPROVE' align='center'> 
                //      </form> <form >
				//      <input type='hidden' name='action' value='2'>
				// 	 <input type='hidden' name='id' value='$a[0]' >
				//      <input type='submit' name='bview' class='button_register_1' value='              REJECT' align='center'> 
				// 	 </form>";



                }
            }
                ?>