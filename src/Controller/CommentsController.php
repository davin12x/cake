<?php
namespace App\Controller;
class CommentsController extends AppController
{
    public function index()
    {
        $user = $this->Auth->user();
      
         $this->set(compact('comments'));
    }
      public function add()
      {
          
        $comment= $this->Comments->newEntity();
       
          if ($this->request->is('post')) 
        {
               //var_dump($comment);
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
    public function delete($id=null)
    {
          var_dump($this->Comments->get($id));
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comments->get($id);
        if ($this->Comments->delete($comment)) 
        {
            $this->Flash->success(__('The comment has been deleted.'));
        } else 
        {
            $this->Flash->error(__('The comment could not be deleted. Please, try again.'));
        }
        //return $this->redirect(['action' => 'index']);
        $this->redirect($this->referer());
    } 

}
?>