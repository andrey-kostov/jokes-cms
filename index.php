<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
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
				<h2 class="content-title">
					<?php echo $text_recent_articles; ?>
				</h2>
				
				<?php require_once(ROOT_PATH . '/includes/banner.php') ?>
				
				<?php
				$posts = getPublishedPosts();
				foreach ($posts as $post):?>

				<?php
				var_dump($post);
				if (isset($post['topic']['name'])): ?>
					<a 
						href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
						class="btn category">
						<?php echo $post['topic']['name'] ?>
					</a>
				<?php endif ?>

					<div class="post" style="margin-left: 0px;">
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
				
				<?php endforeach ?>
				

			</div>
		</div>
		<!-- // Page content -->

        
    <?php require_once(ROOT_PATH . '/includes/footer.php') ?>
		