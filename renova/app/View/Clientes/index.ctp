<div class="page-header"><br>
	<h2><?php echo __('Clientes'); ?></h2>
</div>
<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pais_id'); ?></th>
			<th><?php echo $this->Paginator->sort('idioma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agencia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('circustancias_medica_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_alta'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico'); ?></th>
			<th><?php echo $this->Paginator->sort('habitacion'); ?></th>
			<th><?php echo $this->Paginator->sort('firma'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Pais']['nombre'], array('controller' => 'paises', 'action' => 'view', $cliente['Pais']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Idioma']['nombre'], array('controller' => 'idiomas', 'action' => 'view', $cliente['Idioma']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Hotel']['nombre'], array('controller' => 'hoteles', 'action' => 'view', $cliente['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['Agencia']['nombre_comercial'], array('controller' => 'agencias', 'action' => 'view', $cliente['Agencia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cliente['CircustanciasMedica']['nombre'], array('controller' => 'circustancias_medicas', 'action' => 'view', $cliente['CircustanciasMedica']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['fecha_alta']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['edad']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['correo_electronico']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['habitacion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['firma']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
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
