<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Make IE8 behave like IE7, necessary for charts -->
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		
		<title>Admin Control Panel</title>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/custom-theme/jquery-ui-1.8.1.custom.css" />
		
		<!-- IE specific CSS stylesheet -->
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css" />
		<![endif]-->
		
		<!-- This stylesheet contains advanced CSS3 features that do not validate yet -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/css3.css" />
		
		<!-- JavaScript -->
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
		<script type="text/javascript" src="js/jquery.rounded.js"></script>
		<script type="text/javascript" src="js/excanvas.js"></script>
		<script type="text/javascript" src="js/jquery.visualize.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>

	<body>
		<div id="bokeh"><div id="container">
			
			<div id="header">
				<h1 id="logo">Admin Control Panel </h1>
				
				<div id="header_buttons">
					
					<a href="#modal" rel="modal"><img src="images/icons/envelope.png" alt="3 Messages" /><?php echo $newposts['datacount']; ?></a>
					<a href="#modal2" rel="modal">modal box test</a>
					<a href="<?php echo GBURL; ?>">view website</a>
					<a href="?url=admin/logout">logout</a>
					
				</div><!-- end #header_buttons -->
				
				<!-- Modal box -->
				<div id="modal">	
					<div class="modalbox">
						<div class="modalhead">
							<img src="images/modaltop.png" alt="Modal arrow" />
							Mailbox
						</div>
						
						<div class="modalcontent">
							<div class="message">
								<div class="author"><a href="#">Teun</a></div>
								<div class="content">This skin can be easily styled!</div>
								<div class="datetime">16-05 - 08:16</div>
							</div>
							
							<div class="message">
								<div class="author"><a href="#">Pieter</a></div>
								<div class="content">It can also be styled very easily.</div>
								<div class="datetime">11-05 - 16:27</div>
							</div>
								
							<div class="message">
								<div class="author"><a href="#">Jane Doe</a></div>
								<div class="content">This template uses a lot of nice CSS3 effects.</div>
								<div class="datetime">10-05 - 18:42</div>
							</div>
						</div>
							
						<div class="modalfoot">
							<img src="images/icons/newmessage.png" alt="New message" /> New message
						</div>
					</div>
				</div>
				
				<!-- Modal box 2 -->
				<div id="modal2">	
					<div class="modalbox">
						<div class="modalhead">
							<img src="images/modaltop.png" alt="Modal arrow" />
							Mailbox 2
						</div>
						
						<div class="modalcontent">
							<div class="message">
								<div class="author"><a href="#">Pieter</a></div>
								<div class="content">It can also be styled very easily.</div>
								<div class="datetime">11-05 - 16:27</div>
							</div>
								
							<div class="message">
								<div class="author"><a href="#">Jane Doe</a></div>
								<div class="content">This template uses a lot of nice CSS3 effects.</div>
								<div class="datetime">10-05 - 18:42</div>
							</div>
						</div>
							
						<div class="modalfoot">
							<img src="images/icons/newmessage.png" alt="New message" /> New message
						</div>
					</div>
				</div>
				
				<!-- Navigation -->
				<ul id="main-nav">
					<li>
						<a href="guestbook.php?url=admin" <?php $_GET['url'] == 'admin' ? print "class='current'" : print ''; ?>>
							Dashboard
						</a>
					</li>
						
					<li>
						<a href="#"><!-- use href="#" to indicate there's a submenu -->
							Content
						</a>
						
						<ul>
							<li><a href="guestbook.php?url=admin/active">Active Posts</a></li>
							<li><a href="guestbook.php?url=admin/arcives">Archives</a></li>
							<li><a href="guestbook.php?url=admin/postcontent">Post</a></li>
						</ul>
					</li>
						
					<li>
						<a href="guestbook.php?url=admin/stats">
							Stats
						</a>
					</li>
						
					<li>
						<a href="#">
							Settings
						</a>
						
						<ul>
							<li><a href="?url=admin/settings">Account Settings</a></li>
							<li><a href="#">Guestbook Settings</a></li>
						</ul>
					</li>
				</ul><!-- end #nav -->
				
			</div><!-- end #header -->
			
			<div id="content">
			
				<?php echo $content; ?>
					
			</div><!-- end #content -->
			
		</div></div><!-- end #bokeh and #container -->
		
		<div id="footer">
			&copy; Copyright <?php echo date("Y"); ?> Winn Guestbook (<?php echo LONG_VERSION_NUMBER ?>), a product of <a href="http://winn.ws">Winn.ws</a>. Need support? Contact me on the <a href="http://code.google.com/p/winn-guestbook/">project page</a>.
		</div><!-- end #footer -->

	</div></body>
</html>