<!DOCTYPE html>
<html lang="es">
<head>
    <title>Funeraria del Buen Pastor</title>
    <?php include 'app/layout/head.php' ?>
</head>
<body class="grey lighten-3 valign-wrapper">
<div class="container">
    <div class="row">
        <div class="col s3 hide-on-small-only"></div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Acceso</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <input value="" id="email" type="email" required>
                            <label class="active" for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input value="" id="password" type="password" required>
                            <label class="active" for="password">Contraseña</label>
                        </div>
                    </div>
                </div>
                <div class="card-action" style="text-align:right">
                    <a onclick="Auth.login($('#email').val(), $('#password').val())" href="#" class="teal-text">Acceder</a>
                </div>
            </div>
        </div>
        <div class="col s3 hide-on-small-only"></div>
    </div>
</div>
</body>
</html>
