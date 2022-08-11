<?php  

header('content-Type: application/json');

if(empty($data['registros'])):
	$errormsg = array('status'=>'error','menssage'=>"A busca não retornou nenhum resultado");
	echo json_encode($errormsg,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

else:
	echo(json_encode(array('status'=> 'sucesso', $data['registros']),JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));

endif;
?>
	
