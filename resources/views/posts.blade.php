<!doctype html>
<title> My Cour </title>

<link rel = "stylesheet" href="/app.css">

<body>
    <?php foreach ($posts as $post) : ?>
<article>

<h1>

<a href="/posts/<?= $post->slug;?>">
    <?= $post->title; ?>
    </a>
    <div>
        <?= $post->excerpt; ?>


    </div>

</h1>



</article>

<?php endforeach; ?>

</body>
