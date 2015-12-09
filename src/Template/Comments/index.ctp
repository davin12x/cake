<!-- File: src/Template/Comments/index.ctp -->

<h1>Comments</h1>
<p><?= $this->Html->link('Logout', ['controller'=> 'users','action' => 'logout']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Article</th>
        <th>Approved</th>
        <th>Actions</th>
        <th></th>
    </tr>

<!-- Here's where we loop through our $comments query object, printing out comment info -->
    <?php foreach ($comments as $comment): ?>
    <tr>
        <td><?= $comment->id ?></td>
         
        <td>
            <?= $this->Html->link($comment->Comment, ['action' => 'view', $comment->id]) ?>
        </td>
        <td>
            <?php 
                    if($comment->approved==1)
                    {
                        echo 'Yes';
                    }
                    else
                        echo 'No';
             ?>
        </td>
       
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $comment->id],
                ['confirm' => 'Are you sure?'])
            ?>
           <?= $this->Html->link('Edit', ['action' => 'edit', $comment->id]) ?>
        </td>
        <td>
             
        </td>
    </tr>
    <?php endforeach; ?>

</table>