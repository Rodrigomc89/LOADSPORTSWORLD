<?php

		ini_set('date.timezone', 'Europe/Madrid');

		$my_file = date("d-m-Y H_i_s") . '_' . $_POST['name'] . '.txt';

		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);

		$fecha = date("d") . " de " . date("M") . " de " . date("y");

		$data = ' Nombre: ' . $_POST['name']. '.  Apellidos: ' . $_POST['apellidos'  ]. '.  Nickname: ' . $_POST['nickmane'].'. Telefono: ' . $_POST['phone'].'. Fecha de nacimiento: ' . $_POST['fecha'];

		$to = 'rodrigo@infiniamobile.com';

		$subject= 'Formulario';

		$htmlContent = 'Datos recibidos el: ' .$fecha. ' Cadastro: ' .$data. ' ';

									// Send email
								    if(mail($to,$subject,$htmlContent,$headers)){
								        $status = 'ok';
								    }else{
								        $status = 'err';
								    }
		fwrite($handle, $data);

?>
