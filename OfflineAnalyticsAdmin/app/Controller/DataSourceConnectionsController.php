<?php
class DataSourceConnectionsController extends AppController {
    public $helpers = array('Html', 'Form');
	
	public function index() {
        $this->set('datasourceconnections', $this->DataSourceConnection->find('all'));
    }
	
	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $datasourceconnection = $this->DataSourceConnection->findById($id);
        if (!$datasourceconnection) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('datasourceconnection', $datasourceconnection);
    }
	
	public function clear() {
        $this->DataSourceConnection->find('all')->clear();
    }
}

?>