<?php

require_once MDL.'CementeryModel.php';
require_once MDL.'ComuneModel.php';
require_once MDL.'InsuranceModel.php';
require_once MDL.'ProviderModel.php';
require_once MDL.'ServiceModel.php';

use Base\Response;

class Admin extends Response {

    public function getCementeries(): array
    {
        $list = (new Cementery())->filter(['id', 'name'], ['active' => 1]);

        return [
            'status' => 'success',
            'message' => 'Cementerios cargados',
            'list' => $list['response'],
        ];
    }

    public function getComunes(): array
    {
        $list = (new Comune())->filter(['id', 'name'], ['active' => 1]);

        return [
            'status' => 'success',
            'message' => 'Comunas cargadas',
            'list' => $list['response'],
        ];
    }

    public function getComunesByRegion(): array
    {
        $byRegion = (new Comune())->byRegion();
        $list = [];
        foreach ($byRegion['response'] as $item) {
            $list['response'][$item['region_id']][] = [
                'id' => $item['id'],
                'name' => $item['name']
            ];
        }

        return [
            'status' => 'success',
            'message' => 'Comunas cargadas',
            'list' => $list['response'],
        ];
    }

    public function getRegions(): array
    {
        $list = (new Comune())->regions();

        return [
            'status' => 'success',
            'message' => 'Regiones cargadas',
            'list' => $list['response'],
        ];
    }

    public function getInsurances(): array
    {
        $list = (new Insurance())->filter(['id', 'name'], ['active' => 1]);

        return [
            'status' => 'success',
            'message' => 'Aseguradoras cargadas',
            'list' => $list['response'],
        ];
    }

    public function getServices(): array
    {
        $list = (new Service())->filter(['id', 'name'], ['active' => 1]);

        return [
            'status' => 'success',
            'message' => 'Tipos de Servicio cargados',
            'list' => $list['response'],
        ];
    }

    public function getProviders(): array
    {
        $list = (new Provider())->filter(['id', 'name'], ['active' => 1]);

        return [
            'status' => 'success',
            'message' => 'Proveedores cargados',
            'list' => $list['response'],
        ];
    }

    public function getProvidersByService(): array
    {
        $list = (new Service())->providers();

        return [
            'status' => 'success',
            'message' => 'Proveedores por servicio cargados',
            'list' => $list['response'],
        ];
    }

    public function getColorsByService(): array
    {
        $list = (new Service())->colors();

        return [
            'status' => 'success',
            'message' => 'Colores por servicio cargados',
            'list' => $list['response'],
        ];
    }

}