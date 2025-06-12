<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>show post</h1>
    <?php
    use App\Model\Post;
    $id = isset($_GET['id'])? $_GET['id']: 0;
    $post = Post::find($id);
    ?>
    <div>
        <?php if($post): ?>
            <h3><?= $post->title ?></h3>
            <p>
                <?= $post->body ?>
            </p>
        <?php else: ?>
            <h3>The post not found!</h3>
        <?php endif;?>
    </div>
</body>
</html>