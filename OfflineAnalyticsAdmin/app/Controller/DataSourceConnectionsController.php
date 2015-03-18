<?php
class DataSourceConnectionsController extends AppController {
    public $helpers = array('Html', 'Form');
	
	public function index() {
        $this->set('datasourceconnections', $this->DataSourceConnection->find('all'));
    }
	
	public function view($id = null) {
		$this->loadModel('MeasurementDefinition');
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $datasourceconnection = $this->DataSourceConnection->findById($id);
        if (!$datasourceconnection) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('datasourceconnection', $datasourceconnection);
		
        $measurementdefinitions = $this->MeasurementDefinition->find('all', array(
        'conditions' => array('MeasurementDefinition.connection_id' => $id)
		));
		
        if ($measurementdefinitions) {
            $this->set('measurementdefinitions', $measurementdefinitions);
        }
		else
		{
			$this->set('measurementdefinitions', array());
		}
    }
	
	public function delete($id = null) {
		if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
		$datasourceconnection = $this->DataSourceConnection->findById($id);
        if (!$datasourceconnection) {
            throw new NotFoundException(__('Invalid post'));
        }
		if ($this->DataSourceConnection->delete($id)) {
			$this->Session->setFlash(
				__('The item with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Session->setFlash(
				__('The item with id: %s could not be deleted.', h($id))
			);
		}

		return $this->redirect(array('action' => 'index'));
    }
	
	public function edit($id)
	{
		$datasourceconnection = $this->DataSourceConnection->findById($id);
        if (!$datasourceconnection) {
            throw new NotFoundException(__('Invalid post'));
        }
		if (empty($this->request->data)) {
			$this->request->data = $datasourceconnection;
		}
		if ($this->request->is('post')) {
			// If the form data can be validated and saved...
			$data = $this->request->data;
			$data['DataSourceConnection']['id'] = $datasourceconnection['DataSourceConnection']['id'];
			$data['DataSourceConnection']['created'] = $datasourceconnection['DataSourceConnection']['created'];
			if ($this->DataSourceConnection->save($data)) {
				// Set a session flash message and redirect.
				$this->Session->setFlash('Changes saved!');
				return $this->redirect('/datasourceconnections');
			}
		}		
		// If no form data, find the recipe to be edited
		// and hand it to the view.
		
        $this->set('datasourceconnection', $datasourceconnection);
	}
	
	public function add() {
        if ($this->request->is('post')) {
			
			$data = $this->request->data;
			$data['DataSourceConnection']['created'] = date("Y-m-d H:i:s");
            $this->DataSourceConnection->create();
            if ($this->DataSourceConnection->save($data)) {
                $this->Session->setFlash(__('Your data source connection was created'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to create data source connection.'));
        }
    }
	
	public function clear() {
        $this->DataSourceConnection->find('all')->clear();
    }
}

?>