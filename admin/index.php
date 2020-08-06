<?php $darkmode = $_COOKIE['darkmode']; ?>
<!DOCTYPE html>
<html lang="es" class="<?php echo $darkmode ?>">
<head><?php include 'layout/head.php' ?></head>
<body id="body" style="display:none">
<?php include 'layout/topbar.php' ?>
<div id="content" class="grid pv-1">
    <div class="row">
        <div class="col-12">
            <div class="tabs wide">
                <button id="tab_contract" onclick="showTabContent('#contract', '.tab-content')" class="tab active"><i class="fa fa-inbox no-click"></i>Nuevo Contrato</button>
                <button id="tab_quotation" onclick="showTabContent('#quotation', '.tab-content')" class="tab"><i class="fas fa-clipboard-list no-click"></i>Nueva Cotización</button>
                <button id="tab_search" onclick="showTabContent('#search', '.tab-content')" class="tab"><i class="fas fa-search no-click"></i>Búsqueda</button>
                <button id="tab_database" onclick="showTabContent('#database', '.tab-content')" class="tab"><i class="fas fa-database no-click"></i>Base de Datos</button>
            </div>
        </div>
        <?php include 'tabs/contract.php' ?>
        <?php include 'tabs/quotation.php' ?>
        <?php include 'tabs/search.php' ?>
        <?php include 'tabs/database.php' ?>
    </div>
</div>
</body>
</html>