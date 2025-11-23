<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí - Emily Cedeño Erazo</title>

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

        .navbar-glass {
            background: rgba(0, 0, 0, 0.65);
            backdrop-filter: blur(8px);
        }

        .foto-perfil {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #1877f2;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            opacity: 0;
            transform: scale(0.8);
            animation: popIn 1s ease forwards;
        }

        @keyframes popIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .card-modern {
            background: white;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 12px 28px rgba(0,0,0,0.15);
            transform: translateY(40px);
            opacity: 0;
            transition: 0.4s ease-in-out;
        }

        .card-modern.reveal {
            transform: translateY(0);
            opacity: 1;
        }

        .card-modern:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 18px 40px rgba(0,0,0,0.25);
        }

        .icono {
            font-size: 2.5rem;
            color: #1877f2;
            margin-bottom: 12px;
        }

        .titulo-seccion {
            font-weight: 700;
            color: #1877f2;
            margin-bottom: 12px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-glass shadow-sm fixed-top">
  <div class="container">

    <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
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
<section class="container my-5" style="padding-top:90px;">

    <!-- FOTO Y TÍTULO -->
    <div class="text-center mb-5">
        <img src="img/perfil.jpg" alt="Foto" class="foto-perfil">
        <h2 class="fw-bold mt-3">Sobre mí</h2>
    </div>

    <!-- TARJETAS -->
    <div class="row g-4">

        <!-- TARJETA 1 -->
        <div class="col-md-4">
            <div class="card-modern reveal text-center">
                <i class="fa-solid fa-user icono"></i>
                <h4 class="titulo-seccion">Información personal</h4>
                <p>
                    Soy una joven de 22 años, nací el 27 de julio del 2003,
                    originaria de la provincia de Orellana.
                </p>
                <p>
                    Me considero una persona responsable, respetuosa y creativa,
                    con un toque perfeccionista que siempre me impulsa a mejorar lo que hago.
                </p>
            </div>
        </div>

        <!-- TARJETA 2 -->
        <div class="col-md-4">
            <div class="card-modern reveal text-center">
                <i class="fa-solid fa-lightbulb icono"></i>
                <h4 class="titulo-seccion">Mi personalidad</h4>
                <p>
                    Disfruto aprender cosas nuevas y enfrentar desafíos
                    que me permitan crecer tanto académica como profesionalmente.
                </p>
            </div>
        </div>

        <!-- TARJETA 3 -->
        <div class="col-md-4">
            <div class="card-modern reveal text-center">
                <i class="fa-solid fa-graduation-cap icono"></i>
                <h4 class="titulo-seccion">Mi desarrollo académico</h4>
                <p>
                    Actualmente, estoy enfocada en mi formación profesional como estudiante
                    de Tecnologías de la Información (TI) en la Universidad Técnica Particular de Loja (UTPL),
                    cursando el quinto semestre.
                </p>
                <p>
                    Mis estudios me han enseñado el valor del pensamiento lógico,
                    la organización y la resolución de problemas.
                </p>
            </div>
        </div>

    </div>

</section>

<footer class="bg-dark text-white text-center py-3">
    © Todos los derechos reservados - 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ANIMACIONES SCROLL REVEAL -->
<script>
    const cards = document.querySelectorAll('.card-modern');

    function revealOnScroll() {
        cards.forEach(card => {
            let position = card.getBoundingClientRect().top;
            let screen = window.innerHeight;
            if (position < screen - 50) {
                card.classList.add('reveal');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);
</script>

</body>
</html>
