<div id="providers" class="tab-subcontent col-12 card" style="display: none">
    <h5>Agregar</h5>
    <div class="row">
        <div class="col-5">
            <label for="addProviderName">Previsión/Banco</label>
            <input id="addProviderName" type="text">
        </div>
        <div class="col-2">
            <label for="addProviderDate">Fecha</label>
            <input id="addProviderDate" type="date">
        </div>
        <div class="col-2">
            <label for="addProviderStatus">Pagado</label>
            <select id="addProviderStatus">
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="col-3">
            <button class="full-width" id="addProviderPayment">Agregar</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <h5>Listado</h5>
            <table class="dTable display nowrap" style="width:100%">
                <thead>
                <tr>
                    <th>Previsión/Banco</th>
                    <th>Fecha</th>
                    <th>Pagado</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Banco 1</td>
                    <td>2020-03-04</td>
                    <td><i class="fas fa-check-circle greenI"></i></td>
                    <td>
                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Banco 2</td>
                    <td>2020-03-04</td>
                    <td><i class="fas fa-times-circle redI"></i></td>
                    <td>
                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Banco 3</td>
                    <td>2020-03-04</td>
                    <td><i class="fas fa-times-circle redI"></i></td>
                    <td>
                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Banco 4</td>
                    <td>2020-03-04</td>
                    <td><i class="fas fa-times-circle redI"></i></td>
                    <td>
                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Banco 5</td>
                    <td>2020-03-04</td>
                    <td><i class="fas fa-times-circle redI"></i></td>
                    <td>
                        <button onclick="$(this).parent().prev().find('i').toggleClass('fa-times-circle').toggleClass('fa-check-circle').toggleClass('greenI').toggleClass('redI')" class="text">Si/No</button>
                        <button class="text">Eliminar</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>