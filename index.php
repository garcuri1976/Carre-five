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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    
    
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
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light">
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
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <!--Footer-->
    <footer class="py-5 bg-dark">
        
    
    
    <div class="container">

            <p class="m-0 text-center text-white"></p>
            <div class="col-4 col-lg-4 mb-3 text-white">
                <h4>CONTACTO</h4>
                    <ul class="list-unstyled">
                    <li class="mb-2"> <a>Teléfono: (54 11) 5444-8585</a></li>
                        <li class="mb-2"><a>Email: info@carre5.com.ar</a></li>
                        <li class="mb-2"><a>Supermercado Carre5 OnLine</a></li>
                        <li class="mb-2"><a>CUIT: 30-66666666-9</a></li>
                    </ul>
            </div>
    </div>    
    </footer>
    <!--Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>