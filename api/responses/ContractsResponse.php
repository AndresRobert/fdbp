<?php

require_once MDL.'ContractModel.php';

use Base\Response;
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
                    $errorIds[] = 's_name';
                    $errorIds[] = 's_last_name';
                    $errorIds[] = 's_id';
                }
                if ($fields['s_email'] === '' || $fields['s_mobile'] === '') {
                    $message = 'Debe ingresar un email y un número de telefono móvil para el solicitante';
                    $errorIds[] = 's_email';
                    $errorIds[] = 's_mobile';
                }
                if ($fields['d_name'] === '' || $fields['d_id'] === '') {
                    $message = 'Debe ingresar un nombre y un rut para identificar al fallecido';
                    $errorIds[] = 'd_name';
                    $errorIds[] = 'd_id';
                }
                if ($fields['f_date'] === '' || $fields['f_time'] === '') {
                    $message = 'Debe ingresar una fecha y una hora del funeral';
                    $errorIds[] = 'f_date';
                    $errorIds[] = 'f_time';
                }
                if ($fields['v_type'] === '' || $fields['v_include'] === '') {
                    $message = 'Debe ingresar un tipo y lo que incluye el servicio';
                    $errorIds[] = 'v_service_id';
                    $errorIds[] = 'v_include';
                }
                if ($fields['v_cost'] === '' || $fields['v_cost'] <= 0) {
                    $message = 'Debe ingresar el valor del servicio';
                    $errorIds[] = 'v_cost';
                }
                if ($fields['p_transfer'] === false && $fields['p_cash'] === false &&
                    $fields['p_check'] === false && $fields['p_check_defered'] === false &&
                    $fields['p_credit_card'] === false && $fields['p_other'] === false) {
                    $message = 'Debe ingresar al menos un medio de pago para el servicio';
                }

                $Contract = new Contract();
                $fields['date'] = date('Y-m-d');
                $fields['user_id'] = Session::Read('user');
                $fields['v_total'] = $fields['v_cost'] - (intVal($fields['v_discount']) ?? 0);
                $fields['v_payment'] = $fields['v_total'] - (intVal($fields['v_coverage']) ?? 0);
                $fields['f_datetime'] = $fields['f_date'].' '.$fields['f_time'];
                unset($fields['f_date'], $fields['f_time']);
                $Contract->set($fields);

                if ($Contract->create()) {
                    $contractId = $Contract->get('id');
                }

                return [
                    'status' => $status,
                    'message' => $message,
                    'id' => $contractId,
                    'errors' => $errorIds,
                ];
            }
        );
    }



}