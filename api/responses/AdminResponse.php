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

    public function saveProvider (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Proveedor guardado correctamente';
                $errorIds = [];
                $id = -1;

                if ($fields['name'] === '') {
                    $message = 'Debe ingresar un nombre para el proveedor';
                    $errorIds[] = 'name';
                    $status = 'fail';
                }

                if ($status === 'success') {
                    $Provider = new Provider();
                    $Provider->set($fields);
                    if (isset($fields['id']) && $Provider->get('id') > 0) {
                        if ($Provider->update()) {
                            $id = $fields['id'];
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible actualizar el proveedor';
                        }
                    } else {
                        if ($Provider->create()) {
                            $id = $Provider->get('id');
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible guardar el proveedor';
                        }
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message,
                    'id' => $id,
                    'errors' => $errorIds,
                    'fields' => $fields
                ];
            }
        );
    }

    public function saveInsurance (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Insurance guardado correctamente';
                $errorIds = [];
                $id = -1;

                if ($fields['name'] === '') {
                    $message = 'Debe ingresar un nombre para la aseguradora';
                    $errorIds[] = 'name';
                    $status = 'fail';
                }

                if ($status === 'success') {
                    $Insurance = new Insurance();
                    $Insurance->set($fields);
                    if (isset($fields['id']) && $Insurance->get('id') > 0) {
                        if ($Insurance->update()) {
                            $id = $fields['id'];
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible actualizar la aseguradora';
                        }
                    } else {
                        if ($Insurance->create()) {
                            $id = $Insurance->get('id');
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible guardar la aseguradora';
                        }
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message,
                    'id' => $id,
                    'errors' => $errorIds,
                    'fields' => $fields
                ];
            }
        );
    }

    public function saveCementery (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Cementerio guardado correctamente';
                $errorIds = [];
                $id = -1;

                if ($fields['name'] === '') {
                    $message = 'Debe ingresar un nombre para el cementerio';
                    $errorIds[] = 'name';
                    $status = 'fail';
                }

                if ($status === 'success') {
                    $Cementery = new Cementery();
                    $Cementery->set($fields);
                    if (isset($fields['id']) && $Cementery->get('id') > 0) {
                        if ($Cementery->update()) {
                            $id = $fields['id'];
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible actualizar el cementerio';
                        }
                    } else {
                        if ($Cementery->create()) {
                            $id = $Cementery->get('id');
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible guardar el cementerio';
                        }
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message,
                    'id' => $id,
                    'errors' => $errorIds,
                    'fields' => $fields
                ];
            }
        );
    }

    public function saveService (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Servicio guardado correctamente';
                $errorIds = [];
                $id = -1;

                if ($fields['name'] === '') {
                    $message = 'Debe ingresar un nombre para el servicio';
                    $errorIds[] = 'name';
                    $status = 'fail';
                }

                if ($status === 'success') {
                    $Service = new Service();
                    $Service->set($fields);
                    if (isset($fields['id']) && $Service->get('id') > 0) {
                        if ($Service->update()) {
                            $id = $fields['id'];
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible actualizar el servicio';
                        }
                    } else {
                        if ($Service->create()) {
                            $id = $Service->get('id');
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible guardar el servicio';
                        }
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message,
                    'id' => $id,
                    'errors' => $errorIds,
                    'fields' => $fields
                ];
            }
        );
    }

    public function deleteProvider (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Proveedor eliminado correctamente';

                $Provider = new Provider();
                if (isset($fields['id']) && $fields['id'] !== '' && $Provider->exists('id', $fields['id'])) {
                    $Provider->set(['id' => $fields['id']]);
                    $Provider->read();
                    $Provider->set(['active' => 0]);
                    if (!$Provider->update()) {
                        $status = 'fail';
                        $message = 'No fue posible eliminar el proveedor';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

    public function deleteInsurance (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Aseguradora eliminado correctamente';

                $Insurance = new Insurance();
                if (isset($fields['id']) && $fields['id'] !== '' && $Insurance->exists('id', $fields['id'])) {
                    $Insurance->set(['id' => $fields['id']]);
                    $Insurance->read();
                    $Insurance->set(['active' => 0]);
                    if (!$Insurance->update()) {
                        $status = 'fail';
                        $message = 'No fue posible eliminar la aseguradora';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

    public function deleteService (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Tipo de servicio eliminado correctamente';

                $Service = new Service();
                if (isset($fields['id']) && $fields['id'] !== '' && $Service->exists('id', $fields['id'])) {
                    $Service->set(['id' => $fields['id']]);
                    $Service->read();
                    $Service->set(['active' => 0]);
                    if (!$Service->update()) {
                        $status = 'fail';
                        $message = 'No fue posible eliminar el tipo de servicio';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

    public function deleteCementery (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Cementerio eliminado correctamente';

                $Cementery = new Cementery();
                if (isset($fields['id']) && $fields['id'] !== '' && $Cementery->exists('id', $fields['id'])) {
                    $Cementery->set(['id' => $fields['id']]);
                    $Cementery->read();
                    $Cementery->set(['active' => 0]);
                    if (!$Cementery->update()) {
                        $status = 'fail';
                        $message = 'No fue posible eliminar el cementerio';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

}