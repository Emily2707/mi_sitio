<?php
// Mostrar mensaje de confirmación si viene desde procesar_form.php
$mensajeConfirmacion = "";
if (isset($_GET["ok"]) && $_GET["ok"] == 1) {
    $mensajeConfirmacion = "
    <div class='alert alert-success text-center shadow fade-in' style='max-width:420px; margin:20px auto; border-radius:12px;'>
        <h5 class='mb-1'>✓ Mensaje enviado exitosamente</h5>
        <p class='m-0'>¡Gracias por contactarme! Te responderé pronto.</p>
    </div>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Emily Cedeño Erazo</title>

    <!-- Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Tipografía profesional -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* NAVBAR GLASS */
        .navbar-glass {
            background: rgba(0,0,0,0.65);
            backdrop-filter: blur(8px);
        }

        /* LOADER FULL PANTALLA */
        #loader {
            position: fixed;
            top:0; left:0;
            width:100%; height:100%;
            background:#f0f2f5;
            display:flex;
            justify-content:center;
            align-items:center;
            z-index:9999;
            animation: fadeOut 1s ease forwards;
            animation-delay:1.2s;
        }

        .loader-circle {
            width:55px;
            height:55px;
            border-radius:50%;
            border:6px solid #cfd4da;
            border-top-color:#1877f2;
            animation: spin 0.9s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @keyframes fadeOut {
            to { opacity:0; visibility:hidden; }
        }

        /* TARJETA FACEBOOK PRO */
        .card-facebook {
            max-width: 420px;
            margin: 90px auto 50px auto;
            background: white;
            padding: 30px 35px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0,0,0,0.15);
            animation: slideUp 1s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px);}
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Inputs */
        input, textarea {
            border-radius: 8px !important;
            transition: 0.3s;
        }
        input:focus, textarea:focus {
            border-color: #1877f2 !important;
            box-shadow: 0 0 10px rgba(24, 119, 242, .5) !important;
        }

        /* Botón */
        .btn-facebook {
            background-color: #1877f2;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            padding: 12px;
            transition: 0.3s ease-in-out;
        }
        .btn-facebook:hover {
            background-color: #145fcc;
            box-shadow: 0 7px 20px rgba(24,119,242,0.4);
            transform: translateY(-2px);
        }

        /* Mensaje éxito */
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95);}
            to { opacity: 1; transform: scale(1);}
        }

        /* Título */
        .titulo-fb {
            color: #1877f2;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.6rem;
        }
    </style>
</head>

<body>

<!-- LOADER -->
<div id="loader">
    <div class="loader-circle"></div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-glass shadow-sm fixed-top">
  <div class="container">

    <!-- FOTO PERSONAL + NOMBRE -->
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
      </ul>
    </div>
  </div>
</nav>

<div class='container'>

    <!-- Mensaje de confirmación -->
    <?php echo $mensajeConfirmacion; ?>

    <div class='card-facebook'>

        <h3 class='titulo-fb'><i class="fa-solid fa-envelope-open-text me-2"></i> Contáctame</h3>

        <form action='php/procesar_form.php' method='POST'>

            <label class='form-label'>Nombre</label>
            <input type='text' name='nombre' class='form-control mb-3' required>

            <label class='form-label'>Correo</label>
            <input type='email' name='correo' class='form-control mb-3' required>

            <label class='form-label'>Mensaje</label>
            <textarea name='mensaje' class='form-control mb-3' rows='4' required></textarea>

            <button class='btn btn-facebook w-100 mt-2'>
                <i class="fa-solid fa-paper-plane me-2"></i> Enviar mensaje
            </button>
        </form>

    </div>
</div>

<footer class='bg-dark text-white text-center py-3 mt-5'>
    © Todos los derechos reservados - 2025
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
