<!-- single-post.php -->
<?php require_once 'header.php'; ?>

<h2><?php echo $post['title']; ?></h2>
<p><?php echo $post['content']; ?></p>
<p><?php echo $post['created_at']; ?></p>

<a href="/edit-post/<?php echo $post['id']; ?>">Edit</a>
<a href="/delete-post/<?php echo $post['id']; ?>">Delete</a>

<?php require_once 'footer.php'; ?>
