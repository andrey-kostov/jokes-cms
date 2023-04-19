<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once(ROOT_PATH . '/includes/registration_login.php') ?>
<?php require_once(ROOT_PATH . '/includes/language.php') ?>
<?php require_once(ROOT_PATH . '/includes/header.php') ?>
	
<title>
	<?php echo $text_cms_name; ?>
</title>

</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">

    <?php require_once(ROOT_PATH . '/includes/navbar.php') ?>

		<!-- Page content -->
		<div class="content-wrap"> 
			<div class="content">
				
			<?php require_once(ROOT_PATH . '/includes/banner.php') ?>
			
			<h2 class="content-title">
					<?php echo $text_recent_articles; ?>
				</h2>
				

				<!-- // Posts Start -->

					<div class="posts">
						<?php
							$posts = getPublishedPosts();
							foreach ($posts as $post):?>

								<!-- // Single Post Start -->

								<div class="post">

									<!-- // Posts Topic Start -->

									<?php if (isset($post['topic']['name'])): ?>
										<a 
											href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
											class="btn category">
											<?php echo $post['topic']['name'] ?>
										</a>
									<?php endif ?>

									<!-- // Posts Topic End -->

									<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
										<div class="post_info">
											<h3><?php echo $post['title'] ?></h3>
											<div class="info">
												<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
												<span class="read_more">Read more...</span>
											</div>
										</div>
									</a>
								</div>

								<!-- // Single Post End -->
						
						<?php endforeach ?>
					</div>
					
				<!-- // Posts End -->

			</div>
		</div>
		<!-- // Page content -->

        
    <?php require_once(ROOT_PATH . '/includes/footer.php') ?>
		