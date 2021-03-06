<div>
    <nav class="grey darken-4 nav-extended">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><span style="font-family:'Great Vibes',cursive;font-size:26px">Funeraria del Buen Pastor </span><sub>®</sub></a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="tooltipped" href="contracts.php" data-position="bottom" data-tooltip="Contratos"><i class="material-icons">business_center</i></a></li>
                <li><a class="tooltipped" href="services.php" data-position="bottom" data-tooltip="Administración"><i class="material-icons">tune</i></a></li>
                <li><a class="tooltipped" href="#!" onclick="Auth.logout()" data-position="bottom" data-tooltip="Salir"><i class="material-icons">power_settings_new</i></a></li>
            </ul>
        </div>
        <?php if (isset($admin) && $admin === true) : ?>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="<?php echo isset($services) && $services === true ? 'active' : '' ?>" href="services.php">Tipos de Servicio</a></li>
                    <li class="tab"><a class="<?php echo isset($providers) && $providers === true ? 'active' : '' ?>" href="providers.php">Proveedores</a></li>
                    <li class="tab"><a class="<?php echo isset($insurances) && $insurances === true ? 'active' : '' ?>" href="insurances.php">Aseguradoras</a></li>
                    <li class="tab"><a class="<?php echo isset($cementeries) && $cementeries === true ? 'active' : '' ?>" href="cementeries.php">Cementerios</a></li>
                    <li class="tab"><a class="<?php echo isset($texts) && $texts === true ? 'active' : '' ?>" href="texts.php">Textos</a></li>
                </ul>
            </div>
        <?php endif; ?>
    </nav>
</div>

<ul class="sidenav" id="mobile-nav">
    <li><a href="contracts.php"><i class="material-icons">business_center</i>Contratos</a></li>
    <li><a href="services.php"><i class="material-icons">tune</i>Administración</a></li>
    <li><a href="#!" onclick="Auth.logout()"><i class="material-icons">power_settings_new</i>Salir</a></li>
</ul>