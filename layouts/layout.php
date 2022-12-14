<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafetería Konecta</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Ícono de ventana-->
    <link rel="icon" href="/img/logo.png" type="image/png">
</head>

<body>
    <div class="container">
        <!-- Inicio Header -->
        <?php include 'components/header.php' ?>
        <!-- Fin Header -->

        <main class="flex-shrink-0">
            <?php include 'routing.php' ?>
        </main>

        <!-- Inicio Footer -->
        <?php include('components/footer.php') ?>
        <!-- Fin Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>