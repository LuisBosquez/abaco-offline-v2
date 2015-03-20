<?php
class MeasurementDefinitionsController extends AppController {
    public $helpers = array('Html', 'Form');
	
	public function index() {
        $this->set('measurementdefinitions', $this->MeasurementDefinition->find('all'));
    }
	
	public function viewAllFrom($id = null)
	{
		if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $measurementdefinitions = $this->MeasurementDefinition->find('all', array(
        'conditions' => array('MeasurementDefinition.connection_id' => $id)
		));
		
		
        if (!$measurementdefinitions) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('measurementdefinitions', $measurementdefinitions);
	}
	
	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
		
        $measurementdefinition = $this->MeasurementDefinition->findById($id);
        if (!$measurementdefinition) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('measurementdefinition', $measurementdefinition);
    }
	
	public function edit($id)
	{
		$measurementdefinition = $this->MeasurementDefinition->findById($id);
        if (!$measurementdefinition) {
            throw new NotFoundException(__('Invalid post'));
        }
		if (empty($this->request->data)) {
			$this->request->data = $this->MeasurementDefinition->findById($id);
		}
		if ($this->request->is('post')) {
			// If the form data can be validated and saved...
			$data = $this->request->data;
			$data['MeasurementDefinition']['id'] = $measurementdefinition['MeasurementDefinition']['id'];
			$data['MeasurementDefinition']['connection_id'] = $measurementdefinition['MeasurementDefinition']['connection_id'];
			$data['MeasurementDefinition']['created'] = $measurementdefinition['MeasurementDefinition']['created'];
			$data['MeasurementDefinition']['lastUpdated'] = $measurementdefinition['MeasurementDefinition']['lastUpdated'];
			if ($this->MeasurementDefinition->save($data)) {
				// Set a session flash message and redirect.
				$this->Session->setFlash('Changes saved!');
				return $this->redirect('/datasourceconnections');
			}
		}		
		// If no form data, find the recipe to be edited
		// and hand it to the view.
		
        $this->set('measurementdefinition', $measurementdefinition);
	}
	
	public function delete($id)
	{
		$measurementdefinition = $this->MeasurementDefinition->findById($id);
        if (!$measurementdefinition) {
            throw new NotFoundException(__('Invalid post'));
        }
		if($this->MeasurementDefinition->delete($id)){
			$this->Session->setFlash(
				__('The post with id: %s has been deleted.', h($id))
			);
		}
		else {
			$this->Session->setFlash(
				__('The post with id: %s could not be deleted.', h($id))
			);
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function clear() {
        MeasurementDefinition::clear();
    }
	
	public function add($id = null) {
        if ($this->request->is('post')) {
            $this->MeasurementDefinition->create();
			
			$data = $this->request->data;
			$data['MeasurementDefinition']['connection_id'] = $id;
			$data['MeasurementDefinition']['lastUpdated'] = "0000-00-00 00:00:00"; 
			$data['MeasurementDefinition']['created'] = date("Y-m-d H:i:s"); 
			
            if ($this->MeasurementDefinition->save($data)) {
                $this->Session->setFlash(__('Your measurement definition has been added.'));
                return $this->redirect('/datasourceconnections');
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
}

?>