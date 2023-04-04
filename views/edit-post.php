<!-- edit-post.php -->
<?php require_once 'header.php'; ?>

<h2>Edit Post</h2>

<form method="post" action="/update-post/<?php echo $post['id']; ?>">
    <label>Title:</label><br>
    <input type="text" name="title" value="<?php echo $post['title']; ?>"><br>

    <label>Content:</label><br>
    <textarea name="content"><?php echo $post['content']; ?></textarea><br>

    <button type="submit">Save</button>
</form>

<?php require_once 'footer.php'; ?>
