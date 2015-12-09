<h3>Add Comments</h3>
<?php
    echo $this->Form->create('Comment', array('url'=>array('action'=>'add')));
    echo $this->Form->input('Comment', ['rows' => '4']);
    //echo $this->Form->input('Body');
    //echo $this->Form->hidden('article_id', array('value' => $article['id']));
    echo $this->Form->button(__('Save Comment'));
    echo $this->Form->end();
?>
</ul>