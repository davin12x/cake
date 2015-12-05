<h1>Add Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '4']);
    echo $this->Form->input('allow', array('type' => 'checkbox', 'name' => 'publish'));
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>