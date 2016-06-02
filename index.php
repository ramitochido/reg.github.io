<!DOCTYPE html>
<html>
<head>
	<title>PAGINA DE REGISTROS</title>
	<link href="boot/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/nuevoestilo.css"> 
</head>
<body>

	<script languague="javascript">
       	function mostrar(id) {
       		div = document.getElementById(id);
            div.style.display = 'block';
        }

        function cerrar(id) {
        	div = document.getElementById(id);
            div.style.display = 'none';
        }
	</script>
    <script language="javascript">
		function cambiar(esto){
			vista=document.getElementById(esto).style.display;
			if (vista=='none'){
				vista='block';
			}else{
				vista='none';
				}
				document.getElementById(esto).style.display = vista;
			}
    </script>

    <script type="text/javascript">
	    function soloLetras(e){
	       key = e.keyCode || e.which;
	       tecla = String.fromCharCode(key).toLowerCase();
	       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	       especiales = "8-37-39-46";

	       tecla_especial = false
	       for(var i in especiales){
	            if(key == especiales[i]){
	                tecla_especial = true;
	                break;
	            }
	        }

	        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	            return false;
	        }
	    }
	</script>


	<div class="container" id="abc">
		<div class="container" id="content1">
			<div class="col-lg-4">
				<img src="img/logo.png" class="img-responsive">
			</div>
			<div class="col-lg-4" id="con-reg">
				<a href="javascript:cambiar('form2');cerrar('form1')">REGISTRAR</a><br>       
				<a href="javascript:cambiar('form1');cerrar('form2')">INICIAR CESION</a>
			</div>
			<div class="col-lg-4"></div>
		</div>
		<div class="container" id="content2">
			<div class="col-lg-4"  style="background-color:#fff">
			</div>
			<div class="col-lg-4" id="div-reg">
				<form class="form-inline" role="form" id="form2" action="enviar.php" method="post" style="display:none">
					<h3>Registrarse</h3>
					<div class="col-lg-4">
						<label for="email">Email: </label>
					</div>
					<div class="col-lg-8">
						<input type="email" name="email" class="form-control" required="Este campo es requerido">
					</div>
					<div class="col-lg-4">
						<label for="nombre">Nombre: </label>
					</div>
					<div class="col-lg-8">
						<input type="text" name="nombre" class="form-control" onkeypress="return soloLetras(event)" required="este campo es requerido">
					</div>
					<div class="col-lg-4">
						<label for="nombre">Password: </label>
					</div>
					<div class="col-lg-8">
						<input type="password" name="pass" class="form-control" required="este campo es requerido">
					</div>
					<div class="col-lg-4">
					</div>
					<div class="col-lg-8"><br>
						<button type="submit" class="btn btn-primary" name="reg">Registrar</button>
					</div>
				</form>

				<form class="form-inline" role="form" id="form1" action="cesion.php" method="post" style="display:none">
					<h3>iniciar cesion</h3>
					<div class="col-lg-4">
						<label for="nombre">Email: </label>
					</div>
					<div class="col-lg-8">
						<input type="email" name="email" class="form-control">
					</div>
					<div class="col-lg-4">
						<label for="nombre">password: </label>
					</div>
					<div class="col-lg-8">
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="col-lg-4">
					</div>
					<div class="col-lg-8"><br>
						<button type="submit" class="btn btn-primary" name="inicio">Entrar</button>
					</div><br>
				</form>

			</div>
			<div class="col-lg-4"  style="background-color:#fff">
			</div>
		</div>
	</div>
	<div class="container" id="pie">
		<div class="col-lg-3"></div>
		<div class="col-lg-6"></div>
		<div class="col-lg-3"></div>
	</div>
</body> 