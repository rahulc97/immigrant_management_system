
<!DOCTYPE html>
<html>
    <head>
        <title >
           New registration View Page
        </title>

        <link  rel="icon"  href="img.ico" >
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style_newreq.css">
        <link rel="stylesheet" href="style.css">
        <body bgcolor=f3f3f3>
            <div class="div_class_search" align="center">
            <div  class="form">
			<u style="color:#962390"><h2 align='center' style="color: #962390; font-weight: bold; "><br><br>New Requests</h2></u>
			<font color="#962390" size=4px>
            <table border='1' align='center' cellpadding='0'  ><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Town&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agent&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>


 
 <?php

	 
$dbusername="root";
$dbpassword="";
$dbhost="localhost";
$dbname="immigrant";

$con= new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

      if($con)
	  {
        $table="immigrant_data";
        $query="SELECT * from $table where flag=0";
        $q=$con->query($query);
		//   echo "<table border='10' align='center' cellpadding='7'><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Photo No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reason&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allow/Deny&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>";
		  while($a=mysqli_fetch_array($q,MYSQLI_BOTH))
                {
					


                // echo '<tr><td >  <img src="data:image/jpeg;base64,'.base64_encode($a[4]).'" height="100" width="100" /></td><td>'.$a['fname']."</td><td>".$a['lname']."</td><td>".$a['mname']."</td><td>".$a['town']."</td><td>
				echo '<tr><td align="center">  <img src="data:image/jpeg;base64,'.base64_encode($a[4]).'" height="110" width="110" /></td><td align="center">'.$a['fname']."</td><td align='center'>".$a['mname']."</td><td align='center'>".$a['lname']."</td><td align='center' >".$a['dist']."</td><td align='center'>".$a['town']."</td><td align='center'>".$a['agent']."</td><td>

				<form action='expand.php' method='POST'>
				     <input type='hidden' name='action' value='1'>
					 <input type='hidden' name='id' value='$a[0]' >
				     <input type='submit' name='bview' class='button_search' value='View'> 
					 </form>";
					 
					// echo ' <img src="data:image/jpeg;base64,'.base64_encode($a[4]).'" height="100" width="100" />';
                    //  mysqli_free_result($result);
					     
		
   
  
		 } 		       
		
		 
	  }
	  else
	  {
	    echo "Not connected";
	  }
  
 

     ?>
     </table>
	  <form><br />
		    <input type='button'  name='refresh' value='Refresh' class="button_search" onClick='window.location.reload()'style="height:35px; width:150px;">
			</form>
			<br /><br />
	  <br />
    </font>
    </div>
    </div>
</body>
</html>