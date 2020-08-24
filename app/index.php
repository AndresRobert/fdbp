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
        <div id="contract" class="tab-content col-12 card"><?php include 'tabs/contract.php' ?></div>
        <div id="quotation" class="tab-content col-12 card" style="display:none"><?php include 'tabs/quotation.php' ?></div>
        <div id="search" class="tab-content col-12 card" style="display:none"><?php include 'tabs/search.php' ?></div>
        <div id="database" class="tab-content col-12 card" style="display:none"><?php include 'tabs/database.php' ?></div>
    </div>
</div>
</body>
</html>