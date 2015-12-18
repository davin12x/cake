<?php
namespace App\Controller;
use App\Controller\AppController;
class TagsController extends AppController
{
 public function index()
    {
        $tags = $this->Tags->find('all');      
        $this->set(compact('tags'));
    }
    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => ['Articles']
        ]);
        $this->set('tag', $tag);
        $this->set('_serialize', ['tag']);
    }

    public function add()
    {
        $tag = $this->Tags->newEntity();
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);

            if ($this->Tags->save($tag)) {
                $this->Flash->success(__('Your tag has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Cannot Add Tag'));
        }
        $this->set('tag', $tag);
    }

    public function edit($id = null)
    {
        $tag = $this->Tags->get($id);
        $user = $this->Auth->user();
        if (parent::isAuthorized($user)) {
            if ($this->request->is(['post', 'put'])) {
                $this->Tags->patchEntity($tag, $this->request->data);

                if ($this->Tags->save($tag)) {
                    $this->Flash->success(__('Your tag has been updated.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to update your tag.'));
            }
        }

        $this->set('tag', $tag);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tag = $this->Tags->get($id);
        if ($this->Tags->delete($tag)) {
            $this->Flash->success(__('The tag has been deleted.'));
        } else {
            $this->Flash->error(__('The tag could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function isAuthorized($user)
    {
        
        return parent::isAuthorized($user);
    }
    
    public function display($id = null)
    {
        
        $tag = $this->Tags->get($id);
        $this->set('tag', $tag);
        $this->set('_serialize', ['tag']);
        
       
        $this->loadModel('Articles');
        $query = $this->Articles->find()->contain(['Authors']);
        $query->matching('Tags', function ($q) use ($id) {
            return $q->where(['Tags.id' => $id]);
        });
        $this->set('articles', $query->toArray()); 
    }
}
