<?php require_once "config/conexion.php"; ?>
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
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> 
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    
    <!-- carousel
    <link href="assets/carousel/style.css" rel="stylesheet">-->
    <link href="assets/carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/carousel/animate.min.css" rel="stylesheet">

    <!-- scrip-->
    
    <script src="assets/main.js"></script>
    <script src="assets/carousel/owl.carousel.min.js"></script>
   
</head>

<body>
  <br>  
    
    <script>
    // Obtener el enlace por su ID
    var enlace = document.getElementById("btnCarrito");

    // Inhabilitar el enlace
    enlace.addEventListener("click", function(event) {
        event.preventDefault(); // Evitar la acción predeterminada del enlace
    });
    </script>

    <!-- barra encabezado-->

    <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
               <div class="container-fluid">
                     <a class="navbar-brand" >Carre5 OnLine</a>
 
             <!--desplegable-->
             <!-- <a class="btn d-flex align-items-center justify-content-between bg-primary w-10" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 100 30px;">
                    <h6 class="text-dark m-5"><i class="fa fa-bars mr-2"></i>Categorias</h6> <i class="fa fa-angle-down text-dark"></i>
                </a> 
                 <nav class="collapse position-absolute navbar navbar-vertical  align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
            <div class="container-fluid"> 
                 
         <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">-->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Todo</a>
                        
                    <!--levanta info de categoria para armar menu-->    
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                       
                </div>
            </div>
        <!-- </nav>   fin despleglabe -->

<!-- inicio botones de ingreso -->  
           <div class="col-lg-2 col-6 text-left">
                   <div class="col-lg-1">
                    <a href="registro.php" class="text-decoration-none">
                    <span class="h5 text-uppercase text-primary  px-3 ml-n1">Registrate</span>
                  </div>
            </div>  
            <div class="col-lg-1"><a href="login.php" class="text-decoration-none">
                     <span class="h6 text-uppercase text-dark px-2 ">Accede</span></a>
            </div>
             
<!-- fin botones de ingreso -->   
             
<!-- inicio de ingreso --> 
<!--  <div class="col-lg-2">
			<div class="inline-block col-lg-4">
				<div class="form-label">
					Usuario<span class="required error" id="username-info"></span>
			</div>
		<input class="input-box-330" type="text" name="username" id="username">
				</div>
			</div>
<div class="col-lg-1">
		<div class="inline-block col-lg-4">
				<div class="form-label">
				Password<span class="required error" id="login-password-info"></span>
				</div>
			<input class="input-box-330" type="password" name="login-password" id="login-password">
		</div>
</div> --> 
<!-- fin de ingreso -->   


        </nav>
        <nav class="navbar navbar-expand-lg navbar-light">

      
        </div>
    </div>

    
    <!--cabecera-->
    <header class="py-5" style="background-color: #ffcc50;">
       

        <div class="container px-1">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Carre5 OnLine</h1>
                <p class="lead fw-normal text-grey-50 mb-0">La manera mas comoda de hacer las compras</p>
               <img src="assets\img\logos\carre5-logo.jpg" alt="carre5">
            </div>


    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                 <!--levanta info de productos para armar catalogo-->  
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">

                            <div class="card h-50 ">

                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                                <!--imagen-->
                            
                                <img class="card-img-top" src="assets/img/productos/<?php echo $data['imagen']; ?>" alt="..." />
                              
                                <!--datos producto-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- nombre-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <!--descripcion-->
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!--precios-->
                                        <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                                <!--cargar producto-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar<i class="fa fa-shopping-cart"></i></a></div>

                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>


<!-- Featured -->
<div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 40px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> Calidad </h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 40px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> Envios</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 40px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> Sin esperas</h5>
                </div>
            </div>

               <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 40px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> Compras 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured -->

<!-- Carousel -->
<div class="container-fluid mb-30">
        <div class="row px-xl-5">
            <div class="container-fluid pt-5 pb-3">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">LAS MEJORES COMPRAS</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Las mejoras compras para tu familia a los mejores preacios</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="shop.html">TIENDA</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">EL MEJOR PRECIO</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">El mejor precio garantizado </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="shop.html">TIENDA</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-3.png" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">LA MAYOR VARIEDAD</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Podes encontrar la mayor variedad del mercado en un solo lugar</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="shop.html">TIENDA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-1.png" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">DESCUENTOS</h6>
                        <h3 class="text-white mb-3">Especiales</h3>
                        <a href="shop.html" class="btn btn-primary">TIENDA</a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/offer-2.png" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Ofertas 3 x 2</h6>
                        <h3 class="text-white mb-3">Super Ofertasos</h3>
                        <a href="shop.html" class="btn btn-primary">TIENDA</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Carousel -->


    <!--Footer-->
    <footer class="py-5 bg-dark">
        
    
 

    
    <div class="container">

            <p class="m-0 text-center text-white"></p>
            <div class="col-4 col-lg-4 mb-3 text-white">
                <h4>CONTACTO</h4>
                    <ul class="list-unstyled">
                    <li class="mb-2"> <li class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"><a></i>Teléfono: (54 11) 5444-8585</a></li>
                    <i class="fa fa-map-marker-alt text-primary mr-3"></i>BELGRANO 637, CABA, ARGENTINA A</p>
                        <li class="mb-2"><a><i class="fa fa-envelope text-primary mr-3"></i>Email: info@carre5.com.ar</a></li>
                        <li class="mb-2"><a>Supermercado Carre5 OnLine</a></li>
                    <a>CUIT: 30-66666666-9</a></li>
                    </ul>
            </div>
    </div>    
    </footer>
    
    <!--Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>

<!-- --------------------------- -->

 <div class="container">
            <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
         <p>Recibi todas las ofertas y novedades</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ingresa tu email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Suscribirse</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">SIGUENOS</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
</div>
       
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by Arcurin Gustavo, Vega Claudio, Javier Torres , Machuca Nicolas
                
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    
<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

</body>




</html>