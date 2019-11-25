
<!DOCTYPE html>
<html>
    <head>
        <title >
           Search View Page
        </title>

        <link  rel="icon"  href="img.ico" >
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_searchview.css">
        <link rel="stylesheet" href="style.css">
        <body bgcolor=f3f3f3 >
            <div class="div_class_search" align="center">
            <div  class="form">
<br>
<font color="#962390" size=4px>
            <table border='1' align='center' cellpadding='0' ><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Town&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agent&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>

<?php

//if(isset($_POST['submit']))
  // {

       $radio=filter_input(INPUT_POST,'radio');
      $bnum=filter_input(INPUT_POST,'tbnum');
      $bname=filter_input(INPUT_POST,'tname');
      $dist=filter_input(INPUT_POST,'tdist');
      $city=filter_input(INPUT_POST,'tcity');
	  $arrival=filter_input(INPUT_POST,'tarrival');
      $agent=filter_input(INPUT_POST,'tagent');
      $agentname=filter_input(INPUT_POST,'tagentname');
      
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
            if($radio==1)
            {
            $query="select * from $table where  id=$bnum and fname='$bname' and flag!=-2";
            }
            elseif($radio==2)
            {
                $query="select * from $table where  agentid=$agent and agent='$agentname' and flag!=-2";
                // echo"<br> arrival".$radio;
                
            }
            elseif($radio==3){
            // { echo"<br> arrival".$radio;
                $query="select * from $table where  dist='$dist' and town='$city' and arrival  LIKE '$arrival%' and flag!=-2";
                // echo"<br> arrival".$arrival;
                // echo"<br> arrival".$dist; echo"<br> arrival".$city;
            }
           
            
            $q=$con->query($query);
            if($q)
            {
                // echo"<br> arrival".$arrival;
                // echo"<br> arrival".$dist; echo"<br> arrival".$city;

                while($a=mysqli_fetch_array($q,MYSQLI_BOTH))
                {
                    // echo"<br> arrival".$arrival;
                    // echo "<br> id".$a['id'];
                    // echo "<br> Name".$a['fname'];
                    // echo "<br> Mname".$a['mname'];
                    // echo "<br> Lname".$a['lname'];
                    // echo "<br> arrival".$a['arrival'];
                    // echo "<br> Dob".$a['dob'];

                    echo '<tr><td align="center">  <img src="data:image/jpeg;base64,'.base64_encode($a[4]).'" height="110" width="110" /></td><td align="center">'.$a['fname']."</td><td align='center'>".$a['mname']."</td><td align='center'>".$a['lname']."</td><td align='center' >".$a['dist']."</td><td align='center'>".$a['town']."</td><td align='center'>".$a['agent']."</td><td>
                    <form  action='expandsearch.php' method='POST'>
                <input type='hidden' name='action' value='1'class='button_search'>
                <input type='hidden' name='id' value='$a[0]' class='button_search'>
				     <input type='submit' name='bview'  width='10' value='View' class='button_search' align='center'> 
					 </form>
					
					 </td></tr>";

                    
                }

                
            }
      }
?>
</font>
  </div>
   </div>
    </body>
</html>