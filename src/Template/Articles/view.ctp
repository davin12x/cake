<h1><?= h($article->title) ?></h1>


<p>by <?= h($article->author->username) ?></p>

<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<ul>
<table>
    <tr>        
        <th>Comment</th>
       <th></th>
        <th></th>
        
    </tr>
     <?php 
  
    $comments = $article->comments;
	foreach ($comments as $comment): ?>
    <tr>        
        <td><?= $comment->Comment ?></td> 
        <?php //echo ("comment: "); var_dump($comment->id);?>
        <?php //echo ("article:"); var_dump($article->id);?>
        <td><?= $this->Form->postLink(
                'Delete',
                ['controller'=>'comments','action' => 'delete', $comment->id],
                ['confirm' => 'Are you sure?'])
            ?></td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit','controller'=>'comments',$comment->id]) ?>
        </td>
    

    </tr>
    <?php endforeach; ?>
</table>
    
<h3>Add Comments</h3>
<?php
    echo $this->Form->create('Comment', array('url'=>array('controller'=>'comments', 'action'=>'add')));
    echo $this->Form->input('Comment', ['rows' => '4']);
    //echo $this->Form->input('Body');
    echo $this->Form->hidden('article_id', array('value' => $article['id']));
    echo $this->Form->hidden('publish', array('value' => $article['publish']));
    
    echo $this->Form->button(__('Save Comment'));
    echo $this->Form->end();
?>
</ul>

<table>
    <?php  
    $comments = $article->comments;
	foreach ($comments as $comment): ?>
    <tr>    
        <td>
            <td><?= $comment->body ?></td>  
         <td>
            <?= $comment->created ?>
        </td>
        <td>
            <?= $comment->publish ?>
        </td>
        </td>
        

    </tr>
    <?php endforeach; ?>
</table>