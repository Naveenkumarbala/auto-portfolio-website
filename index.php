<?php 
    error_reporting(0);
	// Personal Details
    $Fname=$_POST['fname'];
    $Em=$_POST['em'];
    $Web=$_POST['web'];
    $Cn=$_POST['cn'];
    $Job=$_POST['job'];
    $Loc1=$_POST['loc1'];
    $Aby=$_POST['aby']; 
    $filepath = 'images/'.$_FILES['file']['name'];

	// Skills
	$Sk1=$_POST['sk1'];
	$Sk2=$_POST['sk2'];
	$Sk3=$_POST['sk3'];
	$Sk4=$_POST['sk4'];

	// Hobbies
	$Hb1=$_POST['hb1'];
	$Hb2=$_POST['hb2'];
	$Hb3=$_POST['hb3'];
	$Hb4=$_POST['hb4'];

	// Education
	$Std1=$_POST['std1'];
	$End1=$_POST['end1'];
	$Brd1=$_POST['brd1'];
	$Edu1=$_POST['edu1'];
	$Edloc1=$_POST['edloc1'];

	$Std2=$_POST['std2'];
	$End2=$_POST['end2'];
	$Brd2=$_POST['brd2'];
	$Edu2=$_POST['edu2'];
	$Edloc2=$_POST['edloc2'];

	$Std3=$_POST['std3'];
	$End3=$_POST['end3'];
	$Brd3=$_POST['brd3'];
	$Edu3=$_POST['edu3'];
	$Edloc3=$_POST['edloc3'];


	// Experience
	$Stde1=$_POST['stde1'];
	$Ende1=$_POST['ende1'];
	$Job1=$_POST['job1'];
	$Com1=$_POST['com1'];
	$Exp1=$_POST['exp1'];

	$Stde2=$_POST['stde2'];
	$Ende2=$_POST['ende2'];
	$Job2=$_POST['job2'];
	$Com2=$_POST['com2'];
	$Exp2=$_POST['exp2'];

	$Stde3=$_POST['stde3'];
	$Ende3=$_POST['ende3'];
	$Job3=$_POST['job3'];
	$Com3=$_POST['com3'];
	$Exp3=$_POST['exp3'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auto Portfolio Design</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="resume">
			<div class="left">
				<div class="img_holder">
					<img src="pic.png" alt="pic">
					<!-- <?php echo '<img src=".$filepath." height="200" width="300"/>'; ?> -->
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text"><?php echo $Cn; ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text"><?php echo $Em; ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-weebly" aria-hidden="true"></i></div>
									<div class="text"><?php echo $Web; ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text"><?php echo $Loc1; ?></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="skills_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="skills">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fa fa-star checked"></i></div>
									<div class="text">
										<?php echo $Sk1; ?>
									</div
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fa fa-star checked"></i></div>
									<div class="text">
										<?php echo $Sk2; ?>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fa fa-star checked"></i></div>
									<div class="text">
										<?php echo $Sk3; ?>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fa fa-star checked"></i></div>
									<div class="text">
										<?php echo $Sk4; ?>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="hobbies_wrap pb">
					<div class="title">
						hobbies
					</div>
					<div class="hobbies">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-book"></i></div>
									<div class="text">
										<?php echo $Hb1; ?>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-music"></i></div>
									<div class="text">
										<?php echo $Hb2; ?>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-gamepad"></i></div>
									<div class="text">
										<?php echo $Hb3; ?>
									</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-tree"></i></div>
									<div class="text">
										<?php echo $Hb4; ?>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="header">
					<div class="name_role">
						<div class="name">
                            <?php echo $Fname; ?>
						</div>
						<div class="role">
                            <?php echo $Job; ?>
						</div>
					</div>
					<div class="about">
					<?php echo $Aby; ?>
					</div>
				</div>
				<div class="right_inner">
					<div class="exp">
						<div class="title">
							experience
						</div>
						<div class="exp_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											<?php echo $Stde1; ?> - Present
										</div>
										<div class="info">
											<p class="info_title">
												<?php echo $Job1; ?>
											</p>
											<p class="info_com">
												<?php echo $Com1; ?>
											</p>
											<p class="info_cont">
												<?php echo $Exp1; ?>
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											<?php echo $Stde2; ?> - <?php echo $Ende2; ?>
										</div>
										<div class="info">
											<p class="info_title">
												<?php echo $Job2; ?>
											</p>
											<p class="info_com">
												<?php echo $Com2; ?>
											</p>
											<p class="info_cont">
												<?php echo $Exp2; ?>
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											<?php echo $Stde3; ?> - <?php echo $Ende3; ?>
										</div>
										<div class="info">
											<p class="info_title">
												<?php echo $Job3; ?>
											</p>
											<p class="info_com">
												<?php echo $Com3; ?>
											</p>
											<p class="info_cont">
												<?php echo $Exp3; ?>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											<?php echo $Std1; ?> - <?php echo $End1; ?>
										</div>
										<div class="info">
											<p class="info_title">
											<?php echo $Brd1; ?>
											</p>
											<p class="info_com">
												<?php echo $Edu1; ?>
											</p>
											<p class="info_cont">
												<?php echo $Edloc1; ?>
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											<?php echo $Std2; ?> - <?php echo $End2; ?>
										</div>
										<div class="info">
											<p class="info_title">
												<?php echo $Brd2; ?>
											</p>
											<p class="info_com">
												<?php echo $Edu2; ?>
											</p>
											<p class="info_cont">
												<?php echo $Edloc2; ?>
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											<?php echo $Std3; ?> - <?php echo $End3; ?>
										</div>
										<div class="info">
											<p class="info_title">
												<?php echo $Brd3; ?>
											</p>
											<p class="info_com">
												<?php echo $Edu3; ?>
											</p>
											<p class="info_cont">
												<?php echo $Edloc3; ?>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>