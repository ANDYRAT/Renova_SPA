<div class="page-header"><br>
	<h2><?php echo __('Sesiones'); ?></h2>
</div>
<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('opinion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('terapeuta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamiento_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sesiones as $sesione): ?>
	<tr>
		<td><?php echo h($sesione['Sesione']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sesione['Opinion']['id'], array('controller' => 'opiniones', 'action' => 'view', $sesione['Opinion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesione['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesione['Terapeuta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesione['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesione['Tratamiento']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sesione['Sesione']['id']), array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sesione['Sesione']['id']), array('class' => 'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sesione['Sesione']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $sesione['Sesione']['id'])); ?>
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
