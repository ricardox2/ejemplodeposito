<?php 
	
	if (isset($_POST['btnProcesar'])) {
		$saldo = $_POST['saldo'];
		$oper = $_POST['cbOperacion'];
		$importe=0;
		$importe = $_POST['txtImporte'];
		$resul="<h5>Su saldo actual es: <strong> $saldo</strong></h5>";
		if($importe != 0){
			if($oper == "Deposito"){
				$saldo=$saldo+$importe;
			}else{
				$saldo=$saldo-$importe;
			}
		}
		$resul= $resul."<h5>Su operacion es: $oper</h5>".
		"<h5> El importe es: $importe</h5>".
		"<h5>El saldo actualizado es: $saldo </h5>";


	}else{
		$resul="";
		$saldo=2000;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="whidth=divice-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form action="form2.php" method="POST" >
					<div class="panel panel-primary">
						<div class="panel-heading">Formulario de operaciones</div>
						<div class="panel-body">
							
							<h4>Saldo actual: <?php  echo $saldo; ?></h4>
							<input type="hidden" name="saldo" value="<?php echo $saldo; ?>">
							<div class="form-group">
								<label>Seleccione operación:</label>
								<div>
									<select name="cbOperacion" class="form-control">
										<option value="Deposito">D-Deposito     </option>
										<option value="Retiro">R-Retiro</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Ingrese importe:</label>
								<input type="text" name="txtImporte" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" name="btnProcesar" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Procesar</button>
								<button type="reset" name="btnLimpiar" class="btn btn-danger"><span class="glyphicon glyphicon-trash" ></span>Limpiar</button>
							</div>

							<div class="form-group">
								<?php echo $resul ?>
							</div>


						</div>
					</div>
							
				</form>
							</div>
		</div>
	</div>

	<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>