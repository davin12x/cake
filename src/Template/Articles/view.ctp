<h1><?= h($article->title) ?></h1>


<p>by <?= h($article->author->username) ?></p>

<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<ul>
<?php foreach($article['comments'] as $comment)//table name comments
    { ?>
    <li><?= $comment->Title ?></li>
<?php } ?>
<h3>Add Comments</h3>
<?php
    echo $this->Form->create($comment);
    echo $this->Form->input('Comments');
    echo $this->Form->button(__('Save Comment'));
    echo $this->Form->end();
?>
</ul>