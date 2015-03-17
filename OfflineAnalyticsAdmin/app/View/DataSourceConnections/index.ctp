<!-- File: /app/View/Posts/index.ctp -->

<h1>DataSourceConnections</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Host</th>
        <th>Username</th>
        <th>Password</th>
        <th>targetDatabase</th>
		<th></th>
		<th></th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($datasourceconnections as $datasourceconnection): ?>
    <tr>
        <td><?php echo $datasourceconnection['DataSourceConnection']['id']; ?></td>
        <td>
            <?php echo $this->Html->link(
			$datasourceconnection['DataSourceConnection']['name'],
				array(
					'controller' => 'datasourceconnections', 
					'action' => 'view', 
					$datasourceconnection['DataSourceConnection']['id']
					)
				); 
			?>
        </td>
		<td><?php echo $datasourceconnection['DataSourceConnection']['host']; ?></td>
		<td><?php echo $datasourceconnection['DataSourceConnection']['username']; ?></td>
		<td><?php echo $datasourceconnection['DataSourceConnection']['password']; ?></td>
		<td><?php echo $datasourceconnection['DataSourceConnection']['targetDatabase']; ?></td>
		<td>
			<button>
            <?php echo $this->Html->link(
			"Edit",
				array(
					'controller' => 'datasourceconnections', 
					'action' => 'view', 
					$datasourceconnection['DataSourceConnection']['id']
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
					'controller' => 'datasourceconnections', 
					'action' => 'delete', 
					$datasourceconnection['DataSourceConnection']['id']
					)
				); 
			?>
			</button>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($datasourceconnection); ?>
</table>