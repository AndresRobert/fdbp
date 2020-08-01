<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="src/vendor/acode.min.css" rel="stylesheet">
    <link href="src/invoice.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a93fffc8fc.js" crossorigin="anonymous"></script>
    <script async src="src/vendor/acode.js"></script>
    <script async src="src/invoice.js"></script>
</head>
<body>
<div id="content" class="grid">
    <div class="row">
        <div class="col-3 hideOnSmall"></div>
        <div class="col-6">
            <div style="display:flex">
                <img src="src/img/logo.png" alt="" style="max-width:80%;margin:1rem auto">
            </div>
            <div class="card">
                <h5>Acceso</h5>
                <p class="title">Ingresa tus credenciales</p>
                <div class="row">
                    <div class="col-6">
                        <label for="username">Usuario</label>
                        <input id="username" type="text" placeholder="Nombre de usuario">
                    </div>
                    <div class="col-6">
                        <label for="password">Clave</label>
                        <input id="password" type="password" placeholder="Contrase&ntilde;a">
                    </div>
                    <div class="col-12 right">
                        <button><i class="fas fa-unlock-alt"></i>Acceder</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 hideOnSmall"></div>
    </div>
</div>
</body>
</html>