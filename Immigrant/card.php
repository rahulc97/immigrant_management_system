<!DOCTYPE html>
<html>
    <head>
        <title >
          View My Card
        </title>

        <link  rel="icon"  href="img.ico" >
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="card.css">
    </head>

    <body >
   
    
        <div class="div_class" >
        <form   > <!-- here put php file name-->
            <div class="form_div_class" >
                 
                 <div id="div1" >
                     <div align="center">
                    <img src="head2.png" height="65px" width="350px" ></div>
                                <div  class="row">
                                   
                
 <?php
// include 'barcode128.php';
                                    
$aadhar=filter_input(INPUT_POST,'taadhar');
$fname=filter_input(INPUT_POST,'tfname');
$mob=filter_input(INPUT_POST,'tmob');
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
      $query="SELECT * from $table where aadhar=$aadhar and fname='$fname' and mob=$mob and flag=1";
      $q=$con->query($query);
      $no=mysqli_num_rows($q);
      if($no>0)
      {
      while($a=mysqli_fetch_array($q,MYSQLI_BOTH))
        {
                echo" <div class='imgdiv' class='side' align='left' style='background-color: rgb(235, 235, 224); border-radius:2px; border: 2px solid #000; width: 120px; height: 120px;' > <img src='data:image/jpeg;base64,".base64_encode($a[4])." ' height='120' width='120' /></div>";
              
           
               echo" <div class='main' > <label > FULL NAME  &nbsp &nbsp &nbsp &nbsp :  ".strtoupper($a['fname'])."  ".strtoupper($a['mname'])."  ".strtoupper($a['lname'])."</label>";
               echo"  <label > FATHER's NAME :  &nbsp;".strtoupper($a['father'])."</label>";
               $newDateString = date_format(date_create_from_format('Y-m-d', $a['dob']), 'd-m-Y');
               echo"  <label  > DATE OF BIRTH  &nbsp:  ".$newDateString."</label>";
               echo"  <label > BLOOD GROUP  &nbsp :  &nbsp;".$a['blood']."</label>
<br>
                 </div>
            </div>
            <div class='other_input'>";
            

// echo '<div style="height: 30%; width: 50%;">';
// echo bar128(stripcslashes($a['id']));
// // echo $_POST['generate'];
// echo '</div>';

echo "<div class='side1'>";
 $text=$a['id'].$a['fname'];
 echo "<img alt='testing' src='barcode.php?codetype=Code39&size=40&text=".$text."&print=true'/> </div>";
echo"<div class='main1' ><label class='id_label' >".$a['id']."</label></div>";
            
            echo '</div>';
            
        echo "</div>";
         }

    }
    else{
        
        $query="SELECT * from $table where aadhar=$aadhar and fname='$fname' and mob=$mob and flag=0";
        $q=$con->query($query);
        $no=mysqli_num_rows($q);
        if($no>0)
        {
            header("location:inprocesspage.html");
        }
        else{
            header("location:errorpage.html");
        }
    }
  }
 
            ?>
        </form>
        </div>
      
    </body>

</html>