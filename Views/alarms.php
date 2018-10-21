<?php 

print('<h2 class="p1">GESTIÓN DE STATUS</h2>');

$status_controller = new StatusController();
$status = $status_controller->get();

if(empty($status)){
	print('<div class="container">
		<p class="item  error">No hay status</p>
	</div>');
}else{
	/*colspan es para que tome la cantidad de columnas que le iguales*/
	$template_status = '<div class="item">
		<table>
				<tr>
					<th>Id</th>
					<th>Status</th>
					<th colspan="2">
					    <form method="POST">
                         <input type="hidden" name="r" value="status-add">
                         <input class="button  add" type="submit" value="Agregar">
					    </form>
					</th>
				</tr>';
	for ($i=0; $i < count($status); $i++) { 
		$template_status.='<tr>
					<td>'.$status[$i]['id_status'].'</td>
					<td>'.$status[$i]['status'].'</td>
					<td>
					    <form method="POST">
                         <input type="hidden" name="r" value="status-edit">
                         <input type="hidden" name="id_status" value="'.$status[$i]['id_status'].'">
                         <input class="button  edit" type="submit" value="Ediar">
					    </form>
					</td>
					<td>
					    <form method="POST">
                         <input type="hidden" name="r" value="status-delete">
                         <input type="hidden" name="id_status" value="'.$status[$i]['id_status'].'">
                         <input class="button  delete" type="submit" value="Eliminar">
					    </form>
					</td>
				</tr>';
	}
	$template_status.=		
		'</table>
	</div>';
	print($template_status);
}

