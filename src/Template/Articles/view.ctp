<h1><?= h($article->title) ?></h1>
<p>by <?= h($article->author->username) ?></p>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<ul>
<?php foreach($article['comments'] as $comment){ ?>
    <li><?= $comment->Title ?></li>
<?php } ?>
</ul>