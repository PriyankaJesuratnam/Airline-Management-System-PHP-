<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>
<html>
	<head>
		<title>
			Welcome to Customer
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
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/sample.css"/>
		
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	
		
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
		
	<div id="wrapper">
	<div class="bg-img1">
    <div class="left-section">
        <ul class="nav">
           <li><i class="fa fa-plane" aria-hidden="true"></i><a href="book_tickets.php" class="menu-item"><span class="fontawesome-home ftm"></span>BOOK TICKETS</a>
            </li>
            <!-- <li><a href="#" class="menu-item"><span class="fontawesome-home font-awesome-margin"></span>About <span class="arrow">»</span></a> --></li>
            <li><i class="fa fa-plane" aria-hidden="true"></i><a href="view_booked_tickets.php" class="menu-item"><span class="fontawesome-user ftm"></span>BOOKED TICKETS</a>

            </li>
            <li><i class="fa fa-plane" aria-hidden="true"></i><a href="pnr.php" class="menu-item"><span class="fontawesome-cog ftm"></span>PRINT TICKETS</a>

            </li>
            <li><i class="fa fa-plane" aria-hidden="true"></i><a href="cancel_booked_tickets.php" class="menu-item"><span class="fontawesome-envelope-alt ftm"></span>CANCEL TICKETS</a>
            </li>
            </ul>
		</div>
    <div class="right-section">
		 <?php
			echo "<h3>Welcome ".$_SESSION['login_user']."</h3>";
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
			mysqli_stmt_fetch($stmt);
			if($cnt==1)
			{
				echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
            </div>
            </div>
        </div>
	</body>
</html>