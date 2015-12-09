<h1>Edit Comment</h1>
<?php
    echo $this->Form->create($comment);
    echo $this->Form->input('Comment', ['rows' => '4']);
    echo $this->Form->input('publish', array(
        'type' => 'checkbox',
        'between' => '<span>',
        'after' => '</span>'
    ));
    echo $this->Form->button(__('Save Comment'));
    echo $this->Form->end();
?>