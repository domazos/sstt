<?php

extract($_POST);

require("../class/Contratos.php");

$contrato = new Contratos;

if($contrato->guardaPago($id_contrato_pagar, $boleta_contrato, $id_presupuesto_pagar))
	echo "OK";
else
	echo "ERROR";

?>