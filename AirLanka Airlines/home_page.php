<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AirLanka Airlines</title>
</head>
<link rel="stylesheet" type="text/css" href="css/Home Page.css"/>
<style type="text/css"></style>
<body bgcolor="#000000">
	
		
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
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	

	
<div class="logo" align="center"><p><img src="images/images.png" width="3%" height="3%" alt="a"/>&nbsp;&nbsp;WELCOME TO AIRLANKA AIRLINES&nbsp;&nbsp;<img src="images/images.png" width="3%" height="3%" alt="a"/></p></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	
	
<div class="pic1" align="center"><img src="images/Track-and-Trace-Image-v10x1180.png" width="50%" height="20%" alt="a"/></div>
	
	
	<center><button type="button"><a href="https://www.srilankan.com/en_uk/lk?redirect=1#ibe"><b>BOOK A TRIP</b></a></button></center><br><br> 
	
	<center><p2>LATEST DEALS</p2></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
<center><p2>London-Colombo Special Weekend sale</p2></center>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="pic2" align="center"><img src="images/PROMO-uk-en_uk-Specialweekendsalefr-20221103095346898.jpg" width="50%" height="20%" alt="a"/></div><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	
<center><p1>Special discounts for passengers traveling on Economy Class return tickets from London to Colombo.<br>

Book on srilankan.com from 5th November to 11th December 2022.<br>

This offer is valid only on SriLankan Airlines operated flights and for passengers who are planning for a maximum stay of 21 days.<br></p1></center><br><br><br>
	
<center><button type="button"><a href="https://www.srilankan.com/en_uk/special-offers/promotion/london-colombo-weekend-special-deals?utm_source=Sendgrid&utm_medium=EDM&utm_campaign=London_Colombo_Special_Weekend_Sale&utm_id=London_Colombo_Special_Weekend_Sale"><b>BOOK NOW</b></a></button></center><br><br>
	
	
<center><p2>Enjoy the Island Serenity of Srilanka</p2></center>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="pic2" align="center"><img src="images/wp3246103.jpg" width="50%" height="20%" alt="a"/></div><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	
<center><p1>Get away from the hustle,bustle<br> and the extended the rush hours to <br>discover your own paradise<br>

</p1></center><br><br><br>
	
<center><button type="button"><a href="https://forms.office.com/pages/responsepage.aspx?id=ZsyRBqFSYkyDvwv3KWREIUjbslKJbB1ApXPuxgw60iFUNENaS0FFM1o5MFlFS1VQVTVPNUZURUpYOC4u"><b>BOOK NOW</b></a></button></center><br><br>
	
	
<center><p2>Discover the Serenity</p2></center>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="pic2" align="center"><img src="images/sri-lanka-bn.jpg" width="50%" height="20%" alt="a"/></div><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	
<center><p1>Fly from kathmandu to colombo<br>

</p1></center><br><br><br>
	
<center><button type="button"><a href="https://www.srilankan.com/en_uk/special-offers/promotion/special--discount-from-kathmandu-to-colombo?utm_source=Sendgrid&utm_medium=EDM&utm_campaign=Discover_the_serinity&utm_id=Discover_the_serinity"><b>BOOK NOW</b></a></button></center><br><br>
	

<center><p2>2X Bonus Miles Promotion</p2></center>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="pic2" align="center"><img src="images/2x-miles-promotion-london-colombo.jpg"width="50%" height="20%" alt="a"/></div><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	
<center><p1>Travel from London to Colombo<br> and return on SriLankan Airlines <br>Business class and earn double FlySmiLes Miles!<br>

</p1></center><br><br><br>
	
<center><button type="button"><a href="https://www.srilankan.com/flysmiles/promotions/2x-miles-promotion-london-colombo?"><b>BOOK NOW</b></a></button></center><br><br>
	
	
<center><p2>Student Special</p2></center>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="pic2" align="center"><img src="images/Student-Special-offer.jpg" width="50%" height="20%" alt="a"/></div><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	
<center><p1>Are you travelling for studies?<br> Book your flight on srilankan.com and <br>get exclusive benefits for your student visa!<br>

</p1></center><br><br><br>
	
<center><button type="button"><a href="https://www.srilankan.com/en_uk/special-offers/free-baggage-allowance-for-Students?"><b>BOOK NOW</b></a></button></center><br><br>
	
	
<center><p2>0% installment plan from srilankan.com</p2></center>&nbsp;&nbsp;&nbsp;&nbsp;
<div class="pic2" align="center"><img src="images/instalment-header.jpg" width="50%" height="20%" alt="a"/></div><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
	
<center><p1>Convert your easy payment into<br>Easy payment plans<br>

</p1></center><br><br><br>
	
<center><button type="button"><a href="https://www.srilankan.com/en_uk/special-offers/instalment-plan?"><b>BOOK NOW</b></a></button></center><br><br>
	
	
<center><video width="900" height="500" controls>
  <source src="images/Celebrating 41 years of SriLankan Legacy.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
</video></center><br><br><br><br>

	

	
<footer>
  <div class="footer-content">
  <nav class="footer-menu">
    <div class="footer-col">
      <div class="item">
        <input type="checkbox" id="products">
        <div class="col-section">
          <label for="products">
          <h3>Shop and learn</h3>  
        </label>
          <ul class="product-list">
            <li><a href="#">Mac</a></li>
            <li><a href="#">iPad</a></li>
            <li><a href="#">iPhone</a></li>
            <li><a href="#">Watch</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">Music</a></li>
            <li><a href="#">iTunes</a></li>
            <li><a href="#">HomePod</a></li>
            <li><a href="#">iPod touch</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Gift Cards</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-col">
      <div class="item">
        <input type="checkbox" id="store">
        <div class="col-section">
          <label for="store">
          <h3>Apple Store</h3>  
        </label>
          <ul class="product-list">
            <li><a href="#">Find a Store</a></li>
            <li><a href="#">Genius Bar</a></li>
            <li><a href="#">Today at Apple</a></li>
            <li><a href="#">Apple Camp</a></li>
            <li><a href="#">Field Trip</a></li>
            <li><a href="#">Apple Store App</a></li>
            <li><a href="#">Refurbished and Clearance</a></li>
            <li><a href="#">Financing</a></li>
            <li><a href="#">Reuse and Recycling</a></li>
            <li><a href="#">Order Status</a></li>
            <li><a href="#">Shopping Help</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-col">
      <div class="item">
        <input type="checkbox" id="education">
        <div class="col-section">
          <label for="education">
          <h3>For Education</h3>  
        </label>
          <ul class="product-list">
            <li><a href="#">Apple and Education</a></li>
            <li><a href="#">Shop for College</a></li>
          </ul>
        </div>
      </div>
      <div class="item item-padding-top">
        <input type="checkbox" id="business">
        <div class="col-section">
          <label for="business">
          <h3>For Business</h3>  
        </label>
          <ul class="product-list">
            <li><a href="#">Apple and Business</a></li>
            <li><a href="#">Shop for Business</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-col">
      <div class="item">
        <input type="checkbox" id="acccount">
        <div class="col-section">
          <label for="acccount">
          <h3>Account</h3>  
        </label>
          <ul class="product-list">
            <li><a href="#">Manage Your Apple ID</a></li>
            <li><a href="#">Apple Store Account</a></li>
            <li><a href="#">iCloud.com</a></li>
          </ul>
        </div>
      </div>
      <div class="item item-padding-top">
        <input type="checkbox" id="values">
        <div class="col-section">
          <label for="values">
          <h3>Apple Values</h3>  
        </label>
          <ul class="product-list">
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Environment</a></li>
            <li><a href="#">Inclusion and Diversity</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Supplier Responsibility</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-col">
      <div class="item">
        <input type="checkbox" id="about">
        <div class="col-section">
          <label for="about">
          <h3>About Apple</h3>  
        </label>
          <ul class="product-list">
            <li><a href="#">Newsroom</a></li>
            <li><a href="#">Apple Leadership</a></li>
            <li><a href="#">Job Opportunities</a></li>
            <li><a href="#">Investors</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Contact Apple</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <section class="footer-base">
    <div class="footer-more-ways" x-ms-format-detection="none">
		More ways to shop: Visit an <a href="/retail/">Apple Store</a>, <span class="nowrap">call 1-800-MY-APPLE, or <a href="#">find a reseller</a></span>.
	</div>
    <div class="footer-legal">
		  <div class="footer-legal-copyright">Copyright © 2022 Apple Inc. All rights reserved.</div>
		  <div class="footer-legal-links">
			  <a href="#">Privacy Policy</a>
			  <a href="#">Terms of Use</a>
			  <a href="#">Sales and Refunds</a>
			  <a href="#">Legal</a>
			  <a href="#">Site Map</a>
		  </div>
	  </div>
  </section>
    </div>
</footer>
</body>
</html>
