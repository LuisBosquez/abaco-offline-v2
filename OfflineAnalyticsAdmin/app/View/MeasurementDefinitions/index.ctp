<!-- File: /app/View/Posts/index.ctp -->

<h1>MeasurementDefinitions</h1>
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