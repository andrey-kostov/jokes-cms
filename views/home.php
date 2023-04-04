<!-- home.php -->
<?php require_once 'header.php'; ?>

test

<?php foreach ($posts as $post) { ?>
    <h2><a href="/post/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
    <p><?php echo $post['content']; ?></p>
    <p><?php echo $post['created_at']; ?></p>
    <hr>
<?php } ?>

<?php require_once 'footer.php'; ?>
