<div class="page-header"><br>
	<h2><?php echo __('Agencias'); ?></h2>
</div>
<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('razon_social'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_comercial'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($agencias as $agencia): ?>
	<tr>
		<td><?php echo h($agencia['Agencia']['id']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['razon_social']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['nombre_comercial']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($agencia['Agencia']['correo_electronico']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agencia['Agencia']['id']), array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agencia['Agencia']['id']), array('class' => 'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agencia['Agencia']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $agencia['Agencia']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-primary'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-primary'));
	?>
	</div>
