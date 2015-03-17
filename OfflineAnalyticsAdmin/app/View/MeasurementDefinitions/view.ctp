<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($measurementdefinition['MeasurementDefinition']['name']); ?></h1>

<p><?php echo $measurementdefinition['MeasurementDefinition']['targetTable']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['fields']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['fieldMappings']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['lastUpdated']; ?></p>
<p><?php echo $measurementdefinition['MeasurementDefinition']['created']; ?></p>