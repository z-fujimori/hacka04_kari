<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>test blog</title>
    <link rel="stylesheet" href="test_blog.css">
</head>
<body>
    <h1>Test Blog</h1>
    <?php foreach ($posts as $post) { ?>
        <div class="post">
            <h2><?php echo $post['title'] ?></h2>
            <p><?php echo nl2br($post['content']) ?></p>
            <?php foreach ($post['comments'] as $comment) { ?>
                <div class="comment">
                    <h3><?php each $comment['name'] ?></h3>
                    <p><?php each nl2br($comment['content']) ?></p>
                </div>
            <?php } ?>
            <p class="comment_link">
                投稿日：<?php echo $post['time'] ?>
                <a href="comment.php?no=<?php echo $post['no'] ?>">コメント</a>
            </p>
        </div>
    <?php } ?>
</body>
</html>