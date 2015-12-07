<h1><?= h($article->title) ?></h1>


<p>by <?= h($article->author->username) ?></p>

<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<ul>
<table>
    <tr>        
        <th>Comment</th>
       <th></th>
        
    </tr>
     <?php 
  
    $comments = $article->comments;
	foreach ($comments as $comment): ?>
    <tr>        
        <td><?= $comment->Comment ?></td>              
    

    </tr>
    <?php endforeach; ?>
</table>
    
<h3>Add Comments</h3>
<?php
    echo $this->Form->create('Comment', array('url'=>array('controller'=>'comments', 'action'=>'add')));
    echo $this->Form->input('Comment', ['rows' => '4']);
    //echo $this->Form->input('Body');
    echo $this->Form->hidden('article_id', array('value' => $article['id']));
    
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
            <?= $comment->approved ?>
        </td>
        </td>
        

    </tr>
    <?php endforeach; ?>
</table>