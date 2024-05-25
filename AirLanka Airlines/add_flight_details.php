<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Flight Schedule Details
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
    			margin: 0px 200px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/sample.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
<h1 align="center">AIRLANKA<img src="images/images.png" width="5%" height="5%" alt="a">AIRLINES</h1>
	<div class="bg-img2">	
		
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
										<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i>DASHBOARD</a></li>
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
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i>ABOUTUS</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i>CONTACTUS</a></li>
                <li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i>CHECKPNR</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a></li>

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
		
		
		<center><form action="add_flight_details_form_handler.php" class="container1" method="post">
			<h4>ENTER THE FLIGHT SCHEDULE DETAILS</h4><br><br>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<label for="FLIGHT NO"><b>FIGHT NUMBER</b></label><br>
            <input type="text" placeholder="FLIGHT NO" name="flight_no" required><br>
			
			<label for="origin"><b>ORIGIN</b></label><br>
            <input type="text" placeholder="ORIGIN" name="origin" required><br>
			
			<label for="destination"><b>DISTINATION</b></label><br>
            <input type="text" placeholder="DISTINATION" name="destination" required><br>
			
			<label for="jet_id"><b>FLIGHT ID</b></label><br>
            <input type="text" placeholder="FLIGHT ID" name="jet_id" required><br>
			
			<label for="dep_date"><b>DEPATURE DATE</b></label><br>
            <input type="date" placeholder="DEPATURE DATE" name="dep_date" required><br>
			
			<label for="arr_date"><b>ARRIVAL DATE</b></label><br>
            <input type="date" placeholder="ARRIVAL DATE" name="arr_date" required><br>
			
			<label for="dep_time"><b>DEPATURE TIME</b></label><br>
            <input type="time" placeholder="DEPATURE TIME" name="dep_time" required><br>
			
			<label for="arr_time"><b>ARRIVAL TIME</b></label><br>
            <input type="time" placeholder="ARRIVAL TIME" name="arr_time" required><br>
			
			<label for="seats_eco"><b>NO OF ECONOMY CLASS</b></label><br>
            <input type="number" placeholder="NO OF ECONOMY CLASS" name="seats_eco" required><br>
			
			<label for="seats_bus"><b>NO OF BUSSINESS CLASS</b></label><br>
            <input type="number" placeholder="NO OF BUSSINESS CLASS" name="seats_bus" required><br>
			
			<label for="price_eco"><b>TICKET PRICE ECONOMY CLASS</b></label><br>
            <input type="number" placeholder="TICKET PRICE ECONOMY CLASS" name="price_eco" required><br>
			
			<label for="price_bus"><b>TICKET PRICE BUSSINESS CLASS</b></label><br>
            <input type="number" placeholder="TICKET PRICE BUSSINESS CLASS" name="price_bus" required><br>
						
			<button type="submit" name="Submit" value="Submit" class="btn">SUBMIT</button><br><br>
			</form></center><br><br>
			
			</body>
</html>