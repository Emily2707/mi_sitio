<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis hobbies - Emily Cedeño Erazo</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Tipografía profesional -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f2f5;
        }

        /* NAVBAR GLASS */
        .navbar-glass {
            background: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(8px);
        }

        /* TARJETAS 3D */
        .card-3d {
            border-radius: 18px;
            padding: 35px;
            background: white;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            transition: 0.35s ease;
            animation: fadeInUp 1s ease both;
        }

        .card-3d:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 25px 50px rgba(0,0,0,0.25);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(25px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .icono {
            font-size: 3rem;
            color: #1877f2;
            margin-bottom: 15px;
        }

        ul li {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-glass shadow-sm fixed-top">
  <div class="container">

    <!-- FOTO + NOMBRE -->
    <a class="navbar-brand fw-bold d-flex align-items-center" href="index.html">
        <img src="img/perfil.jpg"
             alt="Foto"
             style="width:42px; height:42px; border-radius:50%; object-fit:cover; 
                    margin-right:10px; border:3px solid #1877f2;
                    box-shadow:0 0 10px rgba(24,119,242,0.5);">
        Emily Cedeño Erazo
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.html">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="sobre-mi.php">Sobre mí</a></li>
        <li class="nav-item"><a class="nav-link" href="hobbies.php">Mis hobbies y pasiones</a></li>
        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- CONTENIDO -->
<section class="container my-5" style="padding-top: 90px;">

    <!-- TARJETA PRINCIPAL -->
    <div class="card-3d text-center mb-5">
        <i class="fa-solid fa-star icono"></i>

        <h2 class="fw-bold mb-3">Mis hobbies y pasiones</h2>

        <p class="px-3" style="font-size: 1.1rem;">
            Fuera de mis estudios, mantengo una vida equilibrada entre la exploración, 
            la conexión personal y la curiosidad digital y creativa.
        </p>
    </div>

    <!-- TARJETAS INDIVIDUALES -->
    <div class="row g-4">

        <!-- TARJETA 1 -->
        <div class="col-md-4">
            <div class="card-3d h-100 text-center">
                <i class="fa-solid fa-code icono"></i>
                <h4 class="fw-bold mb-3">Curiosidad Digital</h4>
                <p>
                    Mi interés por la tecnología va más allá de lo académico. 
                    Disfruto poner mis conocimientos en práctica, especialmente en la creación 
                    y exploración del desarrollo web.
                </p>
            </div>
        </div>

        <!-- TARJETA 2 -->
        <div class="col-md-4">
            <div class="card-3d h-100 text-center">
                <i class="fa-solid fa-plane-departure icono"></i>
                <h4 class="fw-bold mb-3">Exploración y Viajes</h4>
                <p>
                    Me encanta viajar y descubrir lugares nuevos. 
                    Una de mis metas es coleccionar experiencias inolvidables 
                    a través de cada aventura.
                </p>
            </div>
        </div>

        <!-- TARJETA 3 -->
        <div class="col-md-4">
            <div class="card-3d h-100 text-center">
                <i class="fa-solid fa-people-roof icono"></i>
                <h4 class="fw-bold mb-3">Conexión Personal</h4>
                <p>
                    Valoro profundamente compartir momentos con mi familia y mi pareja. 
                    Su apoyo es el motor de mi crecimiento personal y académico.
                </p>
            </div>
        </div>

    </div>

</section>



<footer class="bg-dark text-white text-center py-3">
    © Todos los derechos reservados - 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
