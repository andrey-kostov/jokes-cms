<!-- create-post.php -->
<?php require_once 'header.php'; ?>

<h2>Create Post</h2>

<form method="post" action="/maitap/save-post">
    <label>Title:</label><br>
    <input type="text" name="title"><br>

    <label>Content:</label><br>
    <textarea name="content"></textarea><br>

    <button type="submit">Save</button>
</form>

<?php require_once 'footer.php'; ?>
