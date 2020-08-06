<div id="database" class="tab-content col-12 card" style="display:none">
    <div class="row">
        <div class="col-12">
            <div class="tabs wide">
                <button id="tab_service" onclick="showTabContent('#service', '.tab-subcontent')" class="tab active"><i class="fa fa-bible no-click"></i>Tipo de Servicio</button>
                <button id="tab_insurance" onclick="showTabContent('#insurance', '.tab-subcontent')" class="tab"><i class="fas fa-handshake no-click"></i>Aseguradora</button>
                <button id="tab_invoice" onclick="showTabContent('#invoice', '.tab-subcontent')" class="tab"><i class="fas fa-archive no-click"></i>Facturas y Pagos</button>
                <button id="tab_providers" onclick="showTabContent('#providers', '.tab-subcontent')" class="tab"><i class="fab fa-black-tie no-click"></i>Instituciones para Pago</button>
            </div>
        </div>
        <?php include 'database/service.php' ?>
        <?php include 'database/insurance.php' ?>
        <?php include 'database/invoice.php' ?>
        <?php include 'database/providers.php' ?>
    </div>
</div>