<?php
App::uses('AppModel', 'Model');
class DataSourceConnection extends AppModel {
	public $name = 'DataSourceConnection';
	public $hasMany = 'MeasurementDefinition'
}

?>