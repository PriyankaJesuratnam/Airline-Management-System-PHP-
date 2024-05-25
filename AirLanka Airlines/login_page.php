<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="css/sample.css"/>
<style type="text/css"></style>
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
											   
	<div class="bg-img">
	<form action="login_handler.php" class="container" method="POST">
    <center><h4>AIRLANKA AIRLINES</h4></center>
		
	<div class="imgcontainer">
    <img src="Images/Members.png" alt="user" class="user" width="2%">
    </div>

    <label for="username"><b>USER NAME</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="password"><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
		
		<label for="usertype"><b>USER TYPE</b></label><br><br>
				<center>Customer<input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/></center><br><br>
		 		<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				   <button type="submit" name="Login" value="Login"class="btn">LOGIN</button><br><br>
		
	 			<center><p20>Not Registred?<a href="new_user.php">create an account</a></p20></center><br>
  </form>
</div>


</body>
</html>
