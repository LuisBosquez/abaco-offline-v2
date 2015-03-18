<button>
<?php echo $this->Html->link(
	"Back",
		array(
			'controller' => 'measurementdefinitions', 
			'action' => 'index'
			)
		); 
?>
</button>
<?php echo $this->Form->create('MeasurementDefinition');?>
<?php echo $this->Form->input('MeasurementDefinition.name', array('label' => 'Measurement Name'));?>
<?php echo $this->Form->input('MeasurementDefinition.targetTable', array('label' => 'Target Table'));?>
<?php echo $this->Form->input('MeasurementDefinition.fields', array('label' => 'Fields list'));?>

<?php echo $this->Form->input('MeasurementDefinition.fieldMappings', array('label' => 'Field mappings'));?>

<?php echo $this->Form->end('Add');?>