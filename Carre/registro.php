<?php require_once "config/conexion.php";

if (isset($_POST['submit'])) {
    require_once "config/conexion.php";
		$sql = $conn->prepare("INSERT INTO clientes (id_cliente,dni,nombre,apelido,correo,telefono,direccion,localidad,clave) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");  
		$id_cliente=$_POST['id_cliente'];
    $dni=$_POST['dni'];
    $nombre=$_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$correo= $_POST['correo'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $localidad=$_POST['localidad'];
    $clave=$_POST['clave'];
		$sql->bind_param("sisssisss", $id_cliente,$dni, $nombre, $apellidos, $correo,$telefono, $direccion,$localidad,$clave); 
		if($sql->execute()) {
			$success_message = "Alta Ok";
		} else {
			$error_message = "Error al realizar el alta";
		}
		// $sql->close();   
		// $conn->close();
	} 
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carre5</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<!--Vincular login-->
<div class="signup-heading align-items-center"><h2>REGISTRO DE USUARIOS</h2></div>
					<BR>

<div class="login-signup"><div class="h5  text-primary bg-warning px-20 "><a href="login.php">Entrar</a>
<div class="login-signup"><a href="index.php"> Volver </a></div></div>
             			
		
</div>

<!-- Fin Vincular login-->


<body>
 <!--<div class="h5  text-primary bg-warning px-20"> -->
          
            <br>
<form class="row g-3">
      <div class="col-md-4">
        <label for="id_cliente" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" id="id_cliente">
      </div>
      <div class="col-md-2">
        <label for="dni" class="form-label">DNI</label>
        <input type="number" class="form-control" id="dni">
      </div>
      <div class="col-md-2">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre">
      </div>
      <div class="col-md-2">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido">
      </div>
    
      <div class="col-md-6">
        <label for="correo" class="form-label">Mail</label>
        <input type="correo" class="form-control" id="correo">
      </div>
      <div class="col-md-5">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono">
      </div>
      <div class="col-md-10">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="direccion" placeholder="Colon 120">
      </div>
      <div class="col-md-3">
        <label for="localidad" class="form-label">Localidad</label>
        <br>
        <select id="localidad" class="form-select col-md-8">
          <option selected>Elija...</option>
          <option value="Flores">Flores</option>
          <option value="Almagro">Almagro</option>
          <option value="Boedo">Boedo</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="clave" class="form-label">Clave</label>
        <input type="clave" class="form-control" id="clave">
      </div>
      
  <div class="login-signup">
  <div class="h5  text-primary bg-warning px-20 ">
      <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="terminos">
          <label class="form-check-label" for="terminos">
            Acepta los términos y condiciones
          </label>
        </div>
      </div>

      <div class="row">
        <input class="btn" type="submit" name="signup-btn"
          id="signup-btn" value="REGISTRAR">
      </div> 
     <!--  <div class="col-md-12">
        <button TYPE="SUBMIT" class="btn btn-primary">Confirmar</button>
      </div>-->
					</div>
				</form>
			</div>
</div>

