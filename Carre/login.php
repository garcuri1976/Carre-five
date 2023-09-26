
<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head >
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


<HEAD >
<TITLE>INGRESAR</TITLE>

<body >
<!-- <body  background="img/5.jpg"> -->

<div class="message bg-light">
		
	<div class="sign-up-container t px-xl-5"> 
	
			<div class="col-lg-4 bg-light"> 
			
			</div>
           
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
                    
					<div class="signup-heading align-items-center"><h2>INGRESO DE USUARIOS</h2></div>
					<BR>

            <div class="h5  text-primary bg-warning px-20">
            <div class="login-signup"><a href="index.php"> Volver </a></div>
            <br>
                <div class="col-lg-2 col-6 text-left">
                   <div class="col-lg-1">
							<div class="form-label">
								Usuario<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
                    <div class="col-lg-2 col-6 text-left">
                   <div class="col-lg-1">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
				</div>
					<!-- <BR>
					 <div class="login-signup"><a type=submit> Ingresar </a></div>
                        
                    <div class="col-lg-4 col-6 text-left">
				    <div class=btn px-0 ml-2>  -->
                    

					<input class="h7 text-uppercase text-dark px-2 ml-n1" type="submit" name="login-btn"
                    	id="login-btn" value="Ingresar"  header="Location:3.php";> </div>

					</div>

				</form>
			</div>
		</div>
	</div>
</head>