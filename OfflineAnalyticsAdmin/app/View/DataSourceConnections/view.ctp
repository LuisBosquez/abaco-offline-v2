<!-- File: /app/View/Posts/view.ctp -->

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
<h2>Data Source Connection:</h2>

<h3><?php echo h($datasourceconnection['DataSourceConnection']['name']); ?></h3>

<p>ID: <?php echo h($datasourceconnection['DataSourceConnection']['id']); ?></p>
<p>Host: <?php echo h($datasourceconnection['DataSourceConnection']['host']); ?></p>
<p>Username: <?php echo h($datasourceconnection['DataSourceConnection']['username']); ?></p>
<p>Password: <?php echo h($datasourceconnection['DataSourceConnection']['password']); ?></p>
<p>Database: <?php echo h($datasourceconnection['DataSourceConnection']['targetDatabase']); ?></p>


<h3>MeasurementDefinitions</h3>
<button></button>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>targetTable</th>
        <th>fields</th>
        <th>fieldMappings</th>
        <th>lastUpdated</th>
		<th>created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($measurementdefinitions as $measurementdefinition): ?>
    <tr>
        <td><?php echo $measurementdefinition['MeasurementDefinition']['id']; ?></td>
        <td>
            <?php echo $this->Html->link(
			$measurementdefinition['MeasurementDefinition']['name'],
				array(
					'controller' => 'measurementdefinitions', 
					'action' => 'view', 
					$measurementdefinition['MeasurementDefinition']['id']
					)
				); 
			?>
        </td>
		<td><?php echo $measurementdefinition['MeasurementDefinition']['targetTable']; ?></td>
		<td><?php echo $measurementdefinition['MeasurementDefinition']['fields']; ?></td>
		<td><?php echo $measurementdefinition['MeasurementDefinition']['fieldMappings']; ?></td>
		<td><?php echo $measurementdefinition['MeasurementDefinition']['lastUpdated']; ?></td>
		<td><?php echo $measurementdefinition['MeasurementDefinition']['created']; ?></td>
		<td>
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
        </td>
		<td>
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
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($measurementdefinition); ?>
</table>