<div class="navbar-fixed">
    <nav class="grey darken-4">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo" style="font-family:'Great Vibes',cursive;font-size:26px">Funeraria del Buen Pastor</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="tooltipped" href="contracts.php" data-position="bottom" data-tooltip="Contratos"><i class="material-icons">business_center</i></a></li>
                <li><a class="tooltipped" href="quotations.php" data-position="bottom" data-tooltip="Cotizaciones"><i class="material-icons">content_paste</i></a></li>
                <li><a class="tooltipped" href="admin.php" data-position="bottom" data-tooltip="Administración"><i class="material-icons">tune</i></a></li>
                <li><a class="tooltipped" href="#" onclick="Auth.logout()" data-position="bottom" data-tooltip="Salir"><i class="material-icons">power_settings_new</i></a></li>
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-nav">
    <li><a href="contracts.php"><i class="material-icons">business_center</i>Contratos</a></li>
    <li><a href="quotations.php"><i class="material-icons">content_paste</i>Cotizaciones</a></li>
    <li><a href="admin.php"><i class="material-icons">tune</i>Administración</a></li>
    <li><a href="#" onclick="Auth.logout()"><i class="material-icons">power_settings_new</i>Salir</a></li>
</ul>