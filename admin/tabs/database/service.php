<div id="service" class="tab-subcontent col-12 card">
    <h5>Agregar Tipo de Servicio</h5>
    <div class="row">
        <div class="col-4">
            <label for="addServiceType">Nombre</label>
            <input id="addServiceType" type="text">
        </div>
        <div class="col-3">
            <label for="addServiceProvider">Proveedor</label>
            <select id="addServiceProvider">
                <option value="1">Proveedor 1</option>
                <option value="2">Proveedor 2</option>
                <option value="3">Proveedor 3</option>
            </select>
        </div>
        <div class="col-3">
            <label for="addServiceColor">Color</label>
            <input id="addServiceColor" type="text">
        </div>
        <div class="col-2">
            <button class="full-width" id="addService">Agregar</button>
        </div>
    </div>
    <hr>
    <h5>Agregar Proveedor</h5>
    <div class="row">
        <div class="col-10">
            <label for="addProviderNode">Nombre</label>
            <input id="addProviderNode" type="text">
        </div>
        <div class="col-2">
            <button class="full-width" id="addProvider">Agregar</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h5>Listado</h5>
            <table class="dTable display nowrap" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de Servicio</th>
                    <th>Proveedor</th>
                    <th>Color</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Tipo 1</td>
                    <td>Proveedor 1</td>
                    <td>Color 1</td>
                    <td><button class="text">Eliminar</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tipo 2</td>
                    <td>Proveedor 2</td>
                    <td>Color 2</td>
                    <td><button class="text">Eliminar</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tipo 3</td>
                    <td>Proveedor 3</td>
                    <td>Color 3</td>
                    <td><button class="text">Eliminar</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Tipo 4</td>
                    <td>Proveedor 4</td>
                    <td>Color 4</td>
                    <td><button class="text">Eliminar</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Tipo 5</td>
                    <td>Proveedor 5</td>
                    <td>Color 5</td>
                    <td><button class="text">Eliminar</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>