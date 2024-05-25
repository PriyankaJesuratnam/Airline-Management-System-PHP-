<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
         <script src="bootstrap/jquery.min.js"></script>
         <script src="bootstrap/bootstrap.min.js"></script>
         <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
	    <link rel="stylesheet" type="text/css" href="css/sample.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
        
    </head>
    <body>
        
	<center><form action="pnr.php" class="container2" method="POST">
<center><h4>AIRLANKA AIRLINES</h4></center>         
<label for="pnr" id="u_id" font style="Cambria Math"><b>PNR:</b></font></label><?php echo $stname;?><br>
<label for="pnr" id="u_id" font style="Cambria Math"><b>PASSENGER NO:</b></font></label><?php echo ''. $row[0]. '   ' ?><br>
<label for="pnr" id="u_id" font style="Cambria Math"><b>PASSENGER NAME:</b></font></label><?php echo ''. $row[2]. '   ' ?><br>
<label for="pnr" id="u_id" font style="Cambria Math"><b>AGE:</b></font></label><?php echo ''. $row[3]. '   ' ?><br>
<label for="pnr" id="u_id" font style="Cambria Math"><b>GENDER:</b></font></label><?php echo $row[4] ?><br>
<label for="pnr" id="u_id" font style="Cambria Math"><b>MEAL CHOICE:</b></font></label><?php echo $row[5] ?><br>
<label for="pnr" id="u_id" font style="Cambria Math"><b>FREQUENT FILER NO(IF ANY):</b></font></label><?php echo $row[6] ?><br>
</form></center>
					
                   
        <?php
              }
        ?>
<center><button type="submit" id="u_sub" name="u_sub" value="Submit" class="btn1" onclick="window.print();return false;">PRINT</button><br><br>
<a href="pnr.php"><button type="submit" id="u_sub" name="u_sub" value="Submit" class="btn1">CHECK OTHER PNR</button></a></center><br><br>
    </body>
</html>


 
            
    </body>
</html>


                     