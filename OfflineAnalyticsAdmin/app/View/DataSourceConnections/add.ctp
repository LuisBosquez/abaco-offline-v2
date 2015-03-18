<button>
<?php echo $this->Html->link(
	"Back",
		array(
			'controller' => 'datasourceconnections', 
			'action' => 'index'
			)
		); 
?>
</button>
<h1>Create new Data Source Connection</h1>
<?php echo $this->Form->create('DataSourceConnection');?>
<?php echo $this->Form->input('DataSourceConnection.name', array('label' => 'Connection Name'));?>
<?php echo $this->Form->input('DataSourceConnection.host', array('label' => 'Host'));?>
<?php echo $this->Form->input('DataSourceConnection.username', array('label' => 'Username'));?>

<?php echo $this->Form->input('DataSourceConnection.password', array('label' => 'Password'));?>
<?php echo $this->Form->input('DataSourceConnection.targetDatabase', array('label' => 'Target Database'));?>

<?php echo $this->Form->end('Create');?>
