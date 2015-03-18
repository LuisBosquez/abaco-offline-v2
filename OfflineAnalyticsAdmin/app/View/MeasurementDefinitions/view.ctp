<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($measurementdefinition['MeasurementDefinition']['name']); ?></h1>

<p><?php echo $measurementdefinition['MeasurementDefinition']['targetTable']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['fields']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['fieldMappings']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['lastUpdated']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['created']; ?></p>

<?php echo $this->Form->create('MeasurementDefinition', array('action' => 'view'));?>
<?php echo $this->Form->input('MeasurementDefinition.name', array('label' => 'Connection Name'));?>
<?php echo $this->Form->input('MeasurementDefinition.targetTable', array('label' => 'Target Table')););?>
<?php echo $this->Form->input('MeasurementDefinition.fields', array('label' => 'Fields list')););?>

<?php echo $this->Form->input('MeasurementDefinition.fieldMappings', array('label' => 'Field mappings'));?>
<?php echo $this->Form->input('MeasurementDefinition.lastUpdated', array('label' => 'Last updated'));?>

<?php echo $this->Form->end('Add');?>