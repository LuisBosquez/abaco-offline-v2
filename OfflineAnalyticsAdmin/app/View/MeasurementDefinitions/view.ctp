<!-- File: /app/View/Posts/view.ctp -->
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
<h1><?php echo h($measurementdefinition['MeasurementDefinition']['name']); ?></h1>

<button>
<?php echo $this->Html->link(
"Edit",
	array(
		'controller' => 'MeasurementDefinitions', 
		'action' => 'edit', 
		$measurementdefinition['MeasurementDefinition']['id']
		)
	); 
?>
</button>
<button>
<?php echo $this->Html->link(
	"Delete",
	array(
		'controller' => 'MeasurementDefinitions', 
		'action' => 'delete', 
		$measurementdefinition['MeasurementDefinition']['id']
		)
	); 
?>
</button>
<p><?php echo $measurementdefinition['MeasurementDefinition']['targetTable']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['fields']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['fieldMappings']; ?></p>

