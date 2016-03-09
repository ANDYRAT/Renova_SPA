<nav>
	<ul>
		<li><img src="http://www.activetravels.com/userfiles/image/photo%282%29.jpg" HSPACE="50" width="200" /></li>
		<li>Exoneración de Responsabilidad</li>
	</ul>
</nav>
<div class="titulo">
	<h1>bienvenido | welcome | willkomen | benvenuto | walkomen | bienvenue</h1>
</div>
<table border="2px" style="margin: 0 auto;" width="100%" height="100%">
	<tr>
		<td colspan="4"><label>Nombre: </label><?php echo h($cliente['Cliente']['nombre']); ?><?php echo h($cliente['Cliente']['apellidos']); ?></td>
		<td colspan="2"><label> Edad: </label> <?php echo h($cliente['Cliente']['edad']); ?></td>
	</tr>
	<tr>
		<td colspan="3"><label>País: </label> <?php echo $this->Html->link($cliente['Pais']['nombre'], array('controller' => 'paises', 'action' => 'view', $cliente['Pais']['id'])); ?></td>
		<td colspan="3"><label>E-mail: </label> <?php echo h($cliente['Cliente']['correo_electronico']); ?></td>
	</tr>
	<tr>
		<td colspan="4"><label>Hotel: </label>	<?php echo $this->Html->link($cliente['Hotel']['nombre'], array('controller' => 'hoteles', 'action' => 'view', $cliente['Hotel']['id'])); ?></td>
		<td colspan="2"><label> Habitación: </label>	<?php echo h($cliente['Cliente']['habitacion']); ?></td>
	</tr>
	<tr>
		<td colspan="6"><label>Agencia: </label>	<?php echo $this->Html->link($cliente['Agencia']['nombre_comercial'], array('controller' => 'agencias', 'action' => 'view', $cliente['Agencia']['id'])); ?></td>
	</tr>
</table>
<div class="container">
	<p>1.El masaje o tratamiento que usted va a recibir tiene el propósito básico de la relajación y el alivio de la tensión muscular superficial.</p>
	<p>2.Si usted está insatisfecho con el servicio o experimenta cualquier tipo de molestia o dolor durante la sesión, informe por favor al terapeuta cuanto antes.</p>
	<p>3.Si no se menciona nada durante la sesión, asumiremos que no ha habido ningún problema.</p>
	<p>4.Háganos saber antes del inicio de la sesión si se encuentra bajo alguna de las siguientes circunstancias:</p>
		<ul>
			<li type="square">embarazo</li>
			<li type="square">problemas del corazón</li>
			<li type="square">claustrofobia</li>
			<li type="square">dolor general</li>
			<li type="square">alergia</li>
			<li type="square">epilepsia</li>
			<li type="square">problemas del pie</li>
			<li type="square">cirugía reciente</li>
			<li type="square">problemas o lesión en la espina dorsal</li>
			<li type="square">diabetes</li>
			<li type="square">acne</li>
			<li type="square">algún otro desequilibrio de salud:___________________________________</li>
		</ul>
	<p>5.Cualquier insinuación, hecho o propuesta de caracter sexual ocasionara el final inmediato de la sesión y él/la huésped sera obligado al pago completo del servicio</p>
	<p>6.Por la seguridad de sus valores, le sugerimos dejarlos en la caja fuerte de su habitacón. Renova spa no asumirá ninguna responsabilidad por robo o extravío de valores.</p>
	<p>Le agradecemos su comprensión y esperamos que disfrute de nuestro servicio.</p>
	<div class="firmas">
	<p><label>___________________ </label><label> _________________</label></p>
	<p><label>Firma del Terapeuta </label><label> Firma del Cliente</label></p>
	</div>
	<p>Por favor ayúdenos a mejorar nuestro servicio dándonos su opinión sobre el servicio recibido</p>
	<nav>
		<ul>
			<li id="img-calif"><img src="http://dibujoscolorear.net/images/dlN3Dox2j.jpg" height="50" width="50" HSPACE="50" VSPACE="30" /></li>
			<li id="img-calif"><img src="http://static.guiainfantil.com/pictures/3801-4-dibujo-para-colorear-de-una-cara-contenta.jpg" height="50" width="50" HSPACE="50" VSPACE="30"/></li>
			<li id="img-calif"><img src="http://image005.flaticon.com/1/png/512/37/37304.png" height="50" width="50" HSPACE="50" VSPACE="30" /></li>
			<li id="img-calif"><img src="https://image.freepik.com/iconos-gratis/cara-triste_318-67603.png" height="50" width="50" HSPACE="50" VSPACE="30" /></li>
		</ul>
	</nav>
	<p>Dada la inexistencia previa de condición medica especial. Renova spa y el hotel no se hace responsable de ningún efecto secundario resultante</p>
</div>
