<?php

require_once MDL.'CementeryModel.php';
require_once MDL.'ComuneModel.php';
require_once MDL.'EducationModel.php';
require_once MDL.'InsuranceModel.php';
require_once MDL.'MaritalStatusModel.php';
require_once MDL.'OccupationModel.php';
require_once MDL.'ProviderModel.php';
require_once MDL.'ServiceModel.php';

use Base\Response;
use Kits\Session;

class Admin extends Response {

    public function getCementeries() {
        $table = 'cementeries';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Cementery())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Cementerios cargados',
            'list' => $list,
        ];
    }

    public function getComunes() {
        $table = 'comunes';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Comune())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Comunas cargadas',
            'list' => $list,
        ];
    }

    public function getRegions() {
        $table = 'regions';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Comune())->regions();
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Regiones cargadas',
            'list' => $list,
        ];
    }

    public function getEducationLevels() {
        $table = 'educations';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Education())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Niveles Educacionales cargados',
            'list' => $list,
        ];
    }

    public function getInsurances() {
        $table = 'insurances';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Insurance())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Aseguradoras cargadas',
            'list' => $list,
        ];
    }

    public function getMaritalStatuses() {
        $table = 'marital_statuses';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new MaritalStatus())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Estados Civiles cargados',
            'list' => $list,
        ];
    }

    public function getOccupations() {
        $table = 'occupations';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Occupation())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Ocupaciones cargadas',
            'list' => $list,
        ];
    }

    public function getProveedores() {
        $table = 'providers';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Provider())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Proveedores cargados',
            'list' => $list,
        ];
    }

    public function getServices() {
        $table = 'services';
        $list = Session::Exists($table)
            ? Session::Read($table)
            : (new Service())->filter(['id', 'name'], ['active' => 1]);
        Session::Create($table, $list);

        return [
            'status' => 'success',
            'message' => 'Tipos de Servicio cargados',
            'list' => $list,
        ];
    }

}