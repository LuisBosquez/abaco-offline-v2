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
		
        if (!$measurementdefinitions) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('measurementdefinitions', $measurementdefinitions);
		
		
    }
	
	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
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
	
	public function clear() {
        $this->DataSourceConnection->find('all')->clear();
    }
}

?>