<div class="page-header"><br>
	<h2><?php echo __('Paises'); ?></h2>
</div>
<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paises as $paise): ?>
	<tr>
		<td><?php echo h($paise['Paise']['id']); ?>&nbsp;</td>
		<td><?php echo h($paise['Paise']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paise['Paise']['id']), array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paise['Paise']['id']), array('class' => 'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paise['Paise']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $paise['Paise']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
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
