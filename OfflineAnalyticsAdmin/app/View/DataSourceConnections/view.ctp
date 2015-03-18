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
<h1>Data Source Connection:</h1>

<h2><?php echo h($datasourceconnection['DataSourceConnection']['name']); ?></h2>

<p><?php echo h($datasourceconnection['DataSourceConnection']['id']); ?></p>
<p><?php echo h($datasourceconnection['DataSourceConnection']['host']); ?></p>
<p><?php echo h($datasourceconnection['DataSourceConnection']['username']); ?></p>
<p><?php echo h($datasourceconnection['DataSourceConnection']['password']); ?></p>
<p><?php echo h($datasourceconnection['DataSourceConnection']['targetDatabase']); ?></p>


<h2>MeasurementDefinitions</h2>
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
    </tr>
    <?php endforeach; ?>
    <?php unset($measurementdefinition); ?>
</table>