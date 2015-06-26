<?php
namespace App\Controller;

use Cake\Network\Http\Client;
use Cake\I18n\Time;
use Cake\Log\Log;
use App\Controller\AppController;

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
            'contain' => []
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
// 	    $this->autoRender = false;
	    $http = new Client();
	    $url = 'https://api2.getpebble.com/v2/apps/collection/all/watchapps-and-companions';
	    
	    $response = $http->get($url, [	'platform' => 'pas',
	    								'hardware' => 'basalt',
	    								'filter_hardware' => 'true',
	    								'image_ratio' => 1,
	    								'limit' => 100]);
	    
	    $json = $response->json;
	    
	    $added_count = 0;
		$modified_count = 0;
	    
	    while(!empty($json['links']['nextPage'])) {		
			foreach($json['data'] AS $entry) {
			    $latest_release = new Time(strtotime($entry['latest_release']['published_date']));
			    $published = new Time(strtotime($entry['published_date']));
			    
				$app_sanitized = [
					'appId' => $entry['id'],
			        'author' => $entry['author'],
			        'category_color' => $entry['category_color'],
			        'categoryId' => $entry['category_id'],
			        'category_name' => $entry['category_name'],
			        'changelog' => json_encode($entry['changelog']),
			        'description' => $entry['description'],
			        'developerId' => $entry['developer_id'],
			        'header' => $entry['header_images'][0]['orig'],
			        'hearts' => $entry['hearts'],
			        'icon' => $this->removeSizingParams($entry['icon_image']['28x28']),
			        'latest_release_date' => $latest_release,
			        'latest_release' => json_encode($entry['latest_release']),
			        'list_image' => $this->removeSizingParams($entry['list_image']['80x80']),
			        'name' => $entry['title'],
			        'published_date' => $published,
			        'screenshots' => $this->removeSizingParams($entry['screenshot_images'][0]['144x168']),
			        'share_link' => $entry['links']['share'],
			        'type' => $entry['type'],
			        'url' => $entry['website'],
			        'uuid' => $entry['uuid']
				];
				
				$app = $this->Apps->newEntity();
				$app = $this->Apps->patchEntity($app, $app_sanitized);
				
				if(!$app->isNew()) {
					if($app->dirty('latest_release_date')) {
						if($this->Apps->save($app)) {
							$modified_count++;	
						}
					}
				} else {
					if($this->Apps->save($app)) {
						$added_count++;	
					}
				}
		    }
		    
		    $http = new Client();
			$response = $http->get($json['links']['nextPage']);
			$json = $response->json;
	    }
	    
	    Log::write('debug', 'New Apps: '.$added_count);
	    Log::write('debug', 'Modified Apps: '.$modified_count);
	    
	    $this->set('app_count', $added_count);
	    $this->set('modified_count', $modified_count);
    }
    
    /**
		Helper function that strips off image sizing    
	**/
    function removeSizingParams($url)
    {
	    $temp = explode('&w', $url);
	    $cleanURL = $temp[0];
		return $cleanURL;    
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
        $this->set(compact('app'));
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
