		<!-- navbar -->
		<div class="navbar">
			<div class="logo_div">
				<a href="index.php">
					<h1>
						<?php echo $text_cms_name; ?>
					</h1>
				</a>
			</div>
			<ul>
			<li>
				<a class="active" href="index.php">
					<?php echo $text_navbar_link_1; ?>
			  	</a>
			</li>
			<?php if (isset($_SESSION)) { ?>
				<li>
					<a href="<?php echo BASE_URL . 'register.php'?>">
						<?php echo $text_navbar_link_5; ?>
					</a>
				</li>
				<li>
					<a href="<?php echo BASE_URL . 'login.php'?>">
						<?php echo $text_navbar_link_6; ?>
					</a>
				</li>
			<?php } else{ ?>
				<li>
						<?php echo $_SESSION['user']['username']; ?>
				</li>
			<?php } ?>
			
			<li>
				<a href="#contact">
					<?php echo $text_navbar_link_3; ?>
			  	</a>
			</li>
			<li>
				<a href="#about">
					<?php echo $text_navbar_link_4; ?>
			  	</a>
			</li>
			</ul>
		</div>
		<!-- // navbar -->