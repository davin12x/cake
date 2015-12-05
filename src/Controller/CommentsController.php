<?php
namespace App\Controller;
class CommentsController extends AppController
{
      public function add()
      {
          
        $comment= $this->Comments->newEntity();
       // var_dump($comment);
          if ($this->request->is('post')) 
        {
            /*
            $tempComment=($this->request->data);
            var_dump($tempComment);
            */
             // $comment->Title='lalitss';
              //$comment->Body='bodys';
             // $comment->article_id=4;
               $comment = $this->Comments->patchEntity($comment, $this->request->data);
              $this->Comments->save($comment);
        }
       // $this->set('view', $comment);
         $this->redirect($this->referer());
      }
}
?>