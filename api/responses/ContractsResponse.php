<?php

require_once MDL.'ContractModel.php';

use Base\Response;
use Kits\Auth;
use Kits\Text;
use Kits\Session;

class Contracts extends Response {

    public function save (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Contrato guardado correctamente';
                $errorIds = [];
                $contractId = -1;
                if ($fields['s_name'] === '' || $fields['s_last_name'] === '' || $fields['s_id'] === '') {
                    $message = 'Debe ingresar el nombre, apellido y RUT del solicitante';
                    $errorIds += ['solicName', 'solicLastName', 'solicId'];
                }
                if ($fields['s_email'] === '' || $fields['s_mobile'] === '') {
                    $message = 'Debe ingresar un email y un número de telefono móvil para el solicitante';
                    $errorIds += ['solicEmail', 'solicMobile'];
                }
                if ($fields['d_name'] === '' || $fields['d_id'] === '') {
                    $message = 'Debe ingresar un nombre y un rut para identificar al fallecido';
                    $errorIds += ['deceFullName', 'deceId'];
                }
                if ($fields['f_date'] === '' || $fields['f_time'] === '') {
                    $message = 'Debe ingresar una fecha y una hora del funeral';
                    $errorIds += ['funeralDate', 'funeralTime'];
                }
                if ($fields['v_type'] === '' || $fields['v_include'] === '') {
                    $message = 'Debe ingresar un tipo y lo que incluye el servicio';
                    $errorIds += ['serviceType', 'serviceInclude'];
                }
                if ($fields['v_cost'] === '' || $fields['v_cost'] <= 0) {
                    $message = 'Debe ingresar el valor del servicio';
                    $errorIds += ['serviceCost', 'serviceCost'];
                }
                if ($fields['p_transfer'] === false && $fields['p_cash'] === false &&
                    $fields['p_check'] === false && $fields['p_check_defered'] === false &&
                    $fields['p_credit_card'] === false && $fields['p_other'] === false) {
                    $message = 'Debe ingresar al menos un medio de pago para el servicio';
                }

                $Contract = new Contract();
                $fields['date'] = date('Y-m-d');
                $fields['user_id'] = Session::Read('user');
                $fields['s_total'] = $fields['s_cost'] - (intVal($fields['s_discount']) ?? 0);
                $fields['s_payment'] = $fields['s_total'] - (intVal($fields['s_coverage']) ?? 0);
                $fields['f_datetime'] = $fields['f_date'].' '.$fields['f_time'];
                unset($fields['f_date'], $fields['f_time']);
                $Contract->set($fields);

                if ($Contract->create()) {
                    $contractId = $Contract->get('id');
                }

                $response = [
                    'status' => $status,
                    'message' => $message,
                    'id' => $contractId,
                    'errors' => $errorIds,
                ];

                return $response;
            }
        );
    }

}