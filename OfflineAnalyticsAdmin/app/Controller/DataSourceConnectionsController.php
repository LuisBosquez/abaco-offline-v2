<?php
class DataSourceConnectionsController extends AppController {
    public $helpers = array('Html', 'Form');
	
	public function index() {
        $this->set('datasourceconnections', $this->DataSourceConnection->find('all'));
    }
	
	public function clear() {
        DataSourceConnection::clear();
    }
}

?>