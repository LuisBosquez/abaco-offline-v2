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
		if ($this->request->is('post')) {
			// If the form data can be validated and saved...
			if ($this->MeasurementDefinition->save($this->request->data)) {
				// Set a session flash message and redirect.
				$this->Session->setFlash('Changes saved!');
				return $this->redirect('/index');
			}
		}
		
        $measurementdefinition = $this->MeasurementDefinition->findById($id);
        if (!$measurementdefinition) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('measurementdefinition', $measurementdefinition);
    }
	
	public function clear() {
        MeasurementDefinition::clear();
    }
}

?>