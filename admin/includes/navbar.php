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
                <li><?php echo $_SESSION['user']['username']; ?>, <a href="<?php echo BASE_URL . '/logout.php'; ?>"> Logout</a></li>
			</ul>
		</div>
		<!-- // navbar -->