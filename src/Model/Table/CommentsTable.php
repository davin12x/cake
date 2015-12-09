<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommentsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('comments');
        $this->displayField('title');
        $this->primaryKey('id');

        
        //one to one relationship
        $this->belongsTo('Articles', [
            'className' => 'Articles',
            'foreignKey' => 'article_id'
        ]);
        
    }
}

?>