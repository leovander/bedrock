<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Http\Client;

/**
 * Apps Controller
 *
 * @property \App\Model\Table\AppsTable $Apps
 */
class AppsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Authors', 'Categories']
        ];
        $this->set('apps', $this->paginate($this->Apps));
        $this->set('_serialize', ['apps']);
    }

    /**
     * View method
     *
     * @param string|null $id App id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $app = $this->Apps->get($id, [
            'contain' => ['Authors', 'Categories', 'Apps']
        ]);
        $this->set('app', $app);
        $this->set('_serialize', ['app']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
	    $http = new Client();
	    $url = 'https://api2.getpebble.com/v2/apps/collection/all/watchapps-and-companions';
	    
	    $response = $http->get($url, [	'platform' => 'pas',
	    								'hardware' => 'basalt',
	    								'filter_hardware' => 'true',
	    								'image_ratio' => 1,
	    								'limit' => 100]);
	    
	    $json = $response->json;
	    
/*
	    while(!empty($json->links->nextPage)) {
		
	    }
*/
	    foreach($json['data'] AS $app_entry) {
			pr($app_entry);
			
	    }
	    exit;
/*
        $app = $this->Apps->newEntity();
        $app = $this->Apps->patchEntity($app, $this->request->data);
        if ($this->Apps->save($app)) {
            $this->Flash->success(__('The app has been saved.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The app could not be saved. Please, try again.'));
        }
*/
/*
        $authors = $this->Apps->Authors->find('list', ['limit' => 200]);
        $categories = $this->Apps->Categories->find('list', ['limit' => 200]);
        $this->set(compact('app', 'authors', 'categories'));
        $this->set('_serialize', ['app']);
*/
    }

    /**
     * Edit method
     *
     * @param string|null $id App id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $app = $this->Apps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $app = $this->Apps->patchEntity($app, $this->request->data);
            if ($this->Apps->save($app)) {
                $this->Flash->success(__('The app has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The app could not be saved. Please, try again.'));
            }
        }
        $authors = $this->Apps->Authors->find('list', ['limit' => 200]);
        $categories = $this->Apps->Categories->find('list', ['limit' => 200]);
        $this->set(compact('app', 'authors', 'categories'));
        $this->set('_serialize', ['app']);
    }

    /**
     * Delete method
     *
     * @param string|null $id App id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $app = $this->Apps->get($id);
        if ($this->Apps->delete($app)) {
            $this->Flash->success(__('The app has been deleted.'));
        } else {
            $this->Flash->error(__('The app could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
