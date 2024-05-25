<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 390px
			}
			table {
			 border-collapse: collapse; 
			 margin-left: 10%;
			 margin-right: 10%;
			}
			tr/*:nth-child(3)*/ {
			 border: solid thin;
			}
			.set_nice_size{
				font-size: 17pt;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/sample.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
<h1 align="center">AIRLANKA<img src="images/images.png" width="5%" height="5%" alt="a">AIRLINES</h1>
		
<div class="dc-global-header-wrapper is-hidden-small" data-dc-global-header="clone-apple"
													  data-dc-target="large"
													  data-dc-source="default"
													  data-dc-layout="default"
													  data-dc-appearance="scheme-default"
													  data-dc-action="default"
													  data-dc-state="default">
	<div class="dc-global-header">
		
		<div class="dc-section-wrapper">
			<div class="dc-section">
				
				<div class="dc-section-body-wrapper">
					<div class="dc-section-body">
						
						<div class="dc-cell-wrapper" data-dc-cell="primary">
							<div class="dc-cell">
								
								
								<div class="dc-element-wrapper" data-dc-element="nav-menu-justify"
																data-dc-source="default"
																data-dc-layout="horizontal"
																data-dc-appearance="default"
																data-dc-action="default"
																data-dc-state="default"
																>
									<ul class="dc-element">
										
										<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
										<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i>DASHBOARD</a></li>
										<li><a href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i>PRINTTICKET</a></li>
												
										<li>
											
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i>BOOKTICKETS</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i>BOOKTICKETS</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i>BOOKTICKETS</a>";
						}
					?>
				</li>
				<li><a href="new_user.php"><i class="fa fa-plane" aria-hidden="true"></i>SIGNUP</a></li>
				<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i>CHECKPNR</a></li>
				
				

				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>LOGIN</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>LOGIN</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>LOGIN</a>";
						}
					?>
				</li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a></li>
																
																	
										<li class="dc-element-item justify"></li>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="dc-global-header-wrapper is-hidden-large" data-dc-global-header="clone-apple"
													  data-dc-target="small"
													  data-dc-source="default"
													  data-dc-layout="default"
													  data-dc-appearance="scheme-default"
													  data-dc-action="default"
													  data-dc-state="default">
	<div class="dc-global-header">
		
		<div class="dc-section-wrapper">
			<div class="dc-section">
				
				<div class="dc-section-body-wrapper">
					<div class="dc-section-body">
						
						<div class="dc-cell-wrapper" data-dc-cell="primary">
							<div class="dc-cell">
								
								
								<div class="dc-element-wrapper" data-dc-element="nav-menu"
																data-dc-source="default"
																data-dc-layout="horizontal"
																data-dc-appearance="default"
																data-dc-action="default"
																data-dc-state="default"
																>
									<ul class="dc-element">
										
										<li class="dc-element-item">
											<a href="#" alt="a"><i class="dc-icon-glyph dc-icon-glyph-x-small dc-icon-glyph-bars" style="line-height: 48px;" alt="a"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="dc-cell-wrapper" data-dc-cell="secondary">
							<div class="dc-cell">
								
								
								<div class="dc-element-wrapper" data-dc-element="nav-menu"
																data-dc-source="default"
																data-dc-layout="horizontal"
																data-dc-appearance="default"
																data-dc-action="default"
																data-dc-state="default"
																>
									<ul class="dc-element">
										
										<li class="dc-element-item">
											<a href="#"><i class="dc-icon-glyph dc-icon-glyph-small dc-icon-glyph-apple" style="line-height: 48px;"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="dc-cell-wrapper" data-dc-cell="tertiary">
							<div class="dc-cell">
								
								<!-- <dc-element:nav-menu> -->
								<div class="dc-element-wrapper" data-dc-element="nav-menu"
																data-dc-source="default"
																data-dc-layout="horizontal"
																data-dc-appearance="default"
																data-dc-action="default"
																data-dc-state="default"
																>
									<ul class="dc-element">
										
										<li class="dc-element-item">
											<a href="#"><i class="dc-icon-glyph dc-icon-glyph-x-small dc-icon-glyph-shopping-cart" style="line-height: 48px;"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/global-header.css" />
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-section.css" />
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.classes.css" />
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.css-reset.css" />
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.appearance.color.css" />
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.appearance.typography.css" />
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.icon.glyph.css" />
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-element.nav-menu.css" />
		
		<div class="bg-img2">
			<h3>VIEW BOOKED FLIGHT TICKETS</h3><br><br>
			
				
			
		<h4 class='set_nice_size'><center><u>Upcoming Trips</u></center></h4>
		<?php
			$todays_date=date('Y-m-d');
			$thirty_days_before_date=date_create(date('Y-m-d'));
			date_sub($thirty_days_before_date,date_interval_create_from_date_string("30 days")); 
			$thirty_days_before_date=date_format($thirty_days_before_date,"Y-m-d");
			
			$customer_id=$_SESSION['login_user'];
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? AND journey_date>=? AND booking_status='CONFIRMED' ORDER BY  journey_date";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"ss",$customer_id,$todays_date);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$flight_no,$journey_date,$class,$booking_status,$no_of_passengers,$payment_id);
			mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt)==0)
			{
				echo "<h4><center>No upcoming trips!</center></h4>";
			}
			else
			{
				echo "<table cellpadding=\"10\"";
				echo "<tr><th>PNR</th>
				<th>Date of Reservation</th>
				<th>Flight No.</th>
				<th>Journey Date</th>
				<th>Class</th>
				<th>Booking Status</th>
				<th>No. of Passengers</th>
				<th>Payment ID</th>
				</tr>";
				while(mysqli_stmt_fetch($stmt)) {
        			echo "<tr>
        			<td>".$pnr."</td>
        			<td>".$date_of_reservation."</td>
					<td>".$flight_no."</td>
					<td>".$journey_date."</td>
					<td>".$class."</td>
					<td>".$booking_status."</td>
					<td>".$no_of_passengers."</td>
					<td>".$payment_id."</td>
        			</tr>";
    			}
    			echo "</table> <br>";
			}
			echo "<br><h4 class=\"set_nice_size\"><center><u>Completed Trips</u></center></h4>";

			$query="SELECT pnr,date_of_reservation,flight_no,journey_date,class,booking_status,no_of_passengers,payment_id FROM Ticket_Details where customer_id=? and journey_date<? and journey_date>=? ORDER BY  journey_date";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"sss",$customer_id,$todays_date,$thirty_days_before_date);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$flight_no,$journey_date,$class,$booking_status,$no_of_passengers,$payment_id);
			mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt)==0)
			{
				echo "<h4><center>No trips completed in the past 30 days!</center></h4>";
			}
			else
			{
				echo "<table cellpadding=\"10\"";
				echo "<tr><th>PNR</th>
				<th>Date of Reservation</th>
				<th>Flight No.</th>
				<th>Journey Date</th>
				<th>Class</th>
				<th>Booking Status</th>
				<th>No. of Passengers</th>
				<th>Payment ID</th>
				</tr>";
				while(mysqli_stmt_fetch($stmt)) {
        			echo "<tr>
        			<td>".$pnr."</td>
        			<td>".$date_of_reservation."</td>
					<td>".$flight_no."</td>
					<td>".$journey_date."</td>
					<td>".$class."</td>
					<td>".$booking_status."</td>
					<td>".$no_of_passengers."</td>
					<td>".$payment_id."</td>
        			</tr>";
    			}
    			echo "</table> <br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
	</body>
</html>