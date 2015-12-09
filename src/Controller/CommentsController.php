<?php
namespace App\Controller;
class CommentsController extends AppController
{
    public function index()
    {
        $user = $this->Auth->user();
        $comments = $this->Comments->find('all')->contain(['Articles']);      
        
      
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
    public function view($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => ['Articles']
        ]);
        $this->set('comment', $comment);
        $this->set('_serialize', ['comment']);
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
            $this->Flash->error(__('Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
        $this->redirect($this->referer());
    } 
      public function edit($id = null)
        {
            $comment = $this->Comments->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Comments->patchEntity($comment, $this->request->data);
                if ($this->Comments->save($comment)) {
                    $this->Flash->success(__('Your Comment has been updated.'));
                    return $this->redirect(['action' => 'index']);
                    //$this->redirect($this->referer());
                }
                $this->Flash->error(__('Unable to update your Comment.'));
            }

            $this->set('comment', $comment);
        }

}
?>