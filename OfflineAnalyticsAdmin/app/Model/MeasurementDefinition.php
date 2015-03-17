<?php
App::uses('AppModel', 'Model');
class MeasurementDefinition extends AppModel {
	public $name = 'MeasurementDefinition';
	public $belongsTo = array(
        'DataSourceConnection' => array(
            'className' => 'DataSourceConnection',
            'foreignKey' => 'connection_id'
        )
    );
}

?>