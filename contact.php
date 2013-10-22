<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<meta content="Global" name="distribution">
		<meta name="description" content="Contact Information of Ruby Gold" />
		<meta name="keywords" content="RUBY GOLD,Ruby Gold,ruby gold,ruby gold bangles,bangles,ruby bangles" />
		<meta name="author" content="Overclockers Design" />
		<title>Contact Us | RUBY GOLD</title>
		<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico"/>
		<link type="text/css" href="css/style.css" rel="stylesheet" />
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37976585-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</head>
	<body>
		<div class="wrapper">
			<div class="header">
				<a href="index.html"><img src="images/logo.png" alt="Ruby Gold Logo" title="RUBY GOLD"/></a>
			</div>
			
			<div class="menu">
				<div class="menu_div">
					<ul id="menu">
						<li><a href="index.html">HOME</a></li>
						
						<li><a href="about.html">ABOUT US</a></li>
						
						<li><a href="machinebangles.html" title="Click below to view our Collection">OUR COLLECTION</a>
							<ul>
								<li><a href="machinebangles.html">Machine Bangles</a></li>
								<li><a href="saudibangles.html">Saudi Bangles</a></li>
								<li><a href="castingantique.html">Casting Antique</a></li>
								<li><a href="castingfusion.html" style="border:none;">Casting Fusion</a></li>
								<!--
								<li><a href="#" style="border:none;">CNC</a></li>
								
								<li><a href="#">Category 6</a></li>
								<li><a href="#" style="border:none;">Category 7</a></li>
								-->
							</ul>
						</li>
						
						<li><a href="#" class="selected" style="border:none;">CONTACT US</a></li>
					</ul>
				</div>
			</div>

<div class="clear"></div>

			<div class="content">
				<h1><span style="font-size:48px;">C</span>ONTACT US</h1>
			<div class="clear"></div>

			<div class="conleft">
				<h3>ADDRESS</h3>
				<p>83/85 , DIAMOND PLAZA , SHOP NO.15 ,<br />
				DHANJI STREET , ZAVERI BAzAR ,<br />
				MUMBAI , MH-400003 ,<br />
				INDIA .</p><br />
				<h3>CONTACT</h3>
				<p>Tel. : +91 022 40232524<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 022 23418190<br />
				Fax. : +91 022 33527290<br/><br />
				Mr . Hitesh P Kothari : 9870599999<br/>
				Mr . Sachin P Kothari : 9870572221</p><br/>
				<h3>EMAIL</h3>
				<p><a href="mailto:ruby_bangles@rediffmail.com">ruby_bangles @ rediffmail . com</a></p>
			</div>
			
			<div class="conright">
				<h3>INQUIRY / FEEDBACK</h3><br />
			
				<table>
					<?php if(isset($_POST['Submit'])) { ?>
						<?php	
							date_default_timezone_set('Asia/Calcutta');
							$name = $_POST['name'];
							$email = $_POST['email'];
							$number = $_POST['num'];
							$message = $_POST['message'];
							$headers = "From: info@rubygold.web.in\r\n" .  "Reply-To: " . $email;
							$body = "\r\nName: " . $name . "\r\nEmail ID: " . $email ."\r\nContact Number:" . $number . "\r\nMessage: " . $message ."\r\n\r\nSent:" . " " . date('l jS \of F Y h:i:s A');	
							$to  = "sachinkothari@live.com"; // note the comma
							mail($to, 'Ruby Contact Application', $body, $headers);				
						?>
						<p class="confirm">Thank you for writing to us.<br/> We will get back to you as soon as possible.<br /><a href="index.html" style="text-decoration:none;color:#fff;">Take Me Back to Home</a></p><br /><br /><br /><br /><br /><br />
					<?php } else { ?>															
				<form action="?p=contact" method="post" id="contactform" name="contactform" >
					<form id="contact" name="contact" action="#">
			
						<tr>
							<td  valign="top">Name <span>*</span></td><td><input type="text" name="name" id="name" style="height:25px;width:257px;" value="" /></td>
						</tr>
				
						<tr>
							<td  valign="top">Email <span>*</span></td><td><input type="text" name="email" id="email" style="height:25px;width:257px;" value="" /></td>
						</tr>
				
						<tr>
							<td  valign="top">Number <span>*</span></td><td><input type="text" name="num" id="num" style="height:25px;width:257px;" value="" /></td>
						</tr>

						<tr>
							<td  valign="top">Message <span>*</span></td><td style="padding-left:0px;"><textarea id="message" name="message" rows="5" cols="30"></textarea></td>
						</tr>
						
						<tr>
							<td></td>
							<td height="50"><input type="submit" name="Submit" value="Submit" >
						</tr>
				
					</form>
			<?php } //endif ?>
			</table>	

			</div>
<div class="clear"></div>

			<div class="map">
				<h4>VIEW US ON GOOGLE MAPS</h4>
				<iframe style="margin-left:10px;"width="810" height="350" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=ruby+gold&amp;aq=&amp;sll=18.954553,72.833476&amp;sspn=0.024718,0.027595&amp;ie=UTF8&amp;hq=ruby+gold&amp;hnear=&amp;ll=18.951356,72.832092&amp;spn=0.024717,0.027595&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=6787492171296594305&amp;output=embed" style="border:medium double #e2b02c;"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=ruby+gold&amp;aq=&amp;sll=18.954553,72.833476&amp;sspn=0.024718,0.027595&amp;ie=UTF8&amp;hq=ruby+gold&amp;hnear=&amp;ll=18.951356,72.832092&amp;spn=0.024717,0.027595&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=6787492171296594305" style="text-align:left;">View Ruby Gold on Larger Map</a></small>
			</div>
		</div>

<div class="clear"></div>

			<div class="line">
			</div>

			
			<div class="footer">
				<div class="content1">
					<a href="privacy.html">PRIVACY POLICY</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="jcare.html">JEWELLERY CARE</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT US</a>
				</div>

				<div class="content2">
					&nbsp;COPYRIGHT&nbsp;&nbsp;&copy;&nbsp;&nbsp;2013 &nbsp;RUBY GOLD. ALL RIGHTS RESERVED 
					
				</div>
			</div>
<div class="clear"></div>

			<div class="ov">
				Powered by <a href="http://www.overclockersdesign.com/" target="_blank" title="Overclockers Design">Overclockers Design</a>
			</div>
		</div>
	</body>
</html>
