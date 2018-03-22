<h1>Lista Usuarios</h1>
<?php ($usuarios);?>
<ul> 
<?php echo "<pre>"; foreach($usuarios as $usuarios):?>
	<li><?=$usuarios['nome']?></li>
<?php endforeach;?>
</ul>

