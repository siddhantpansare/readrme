<?php session_start();?>

<!DOCTYPE html >

<html >
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<!-- <div id="logo-wrap"> -->
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				<!-- </div> -->
				
				
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"></h1>
							<div class="entry">
							
								<table  align="center" width="100%">
										<tr  bgcolor="#EEE9F3">
										
										
									<td align="center" width="100%"><b>Developer And Management Team</b></td>
										</tr>
										
										<tr><td><br><br></td></tr>
								<tr>
									<td >
												<strong><font color="#433" size="2">Information about developers:</font></strong><br><br>
														<U><B> Siddhant Pansare   :</B></U><BR><br>
														<UL>
														<LI>Mail Id.<font color="purple">  sidbpansare@gmail.com</font></LI>
														</UL>
														<U><B>Harshal Patil</B></U><BR>		<br>		
														<UL>
														<LI>Mail Id.<font color="purple">  harshalpatil4450@gmail.com</font></LI>
														</UL>
														<U><B>Vivek Morage</B></U><BR>		<br>		
														<UL>
														<LI>Mail Id.<font color="purple">  vivekmorage@gmail.com</font></LI>
														</UL>
												</strong>										
											<center><strong>Contact US :</strong><font color="purple">+91 1231231234</font></center><br><br>						
												The Software used in the Readrme project&nbsp;:<font color="purple">PHP,MYSQL,APACHE,XAMPP.</font> 
									</td>
								</tr>
								</table>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
