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
                    $status = 'fail';
                }
                if ($fields['s_address'] === '' || $fields['s_region_id'] === '0' || $fields['s_comune_id'] === '0') {
                    $message = 'Debe ingresar una dirección, región y comuna para el solicitante';
                    $errorIds[] = 's_address';
                    $errorIds[] = 's_region_id';
                    $errorIds[] = 's_comune_id';
                    $status = 'fail';
                }
                if ($fields['s_mobile'] === '') {
                    $status = 'fail';
                    $message = 'Debe ingresar un número de telefono móvil para el solicitante';
                    $errorIds[] = 's_mobile';
                }

                if ($fields['d_name'] === '' || $fields['d_id'] === '') {
                    $status = 'fail';
                    $message = 'Debe ingresar un nombre y un rut para identificar al fallecido';
                    $errorIds[] = 'd_name';
                    $errorIds[] = 'd_id';
                }
                if ($fields['d_address'] === '' || $fields['d_region_id'] === '0' || $fields['d_comune_id'] === '0') {
                    $message = 'Debe ingresar una dirección, región y comuna para el fallecido';
                    $errorIds[] = 'd_address';
                    $errorIds[] = 'd_region_id';
                    $errorIds[] = 'd_comune_id';
                    $status = 'fail';
                }
                if ($fields['d_place'] === '' || $fields['d_date'] === '' || $fields['d_insurance'] === '') {
                    $message = 'Debe ingresar un lugar, una fecha y un tipo de previsión del fallecimiento';
                    $errorIds[] = 'd_place';
                    $errorIds[] = 'd_date';
                    $errorIds[] = 'd_insurance';
                    $status = 'fail';
                }
                if ($fields['d_marital_status'] === '' || $fields['d_occupation'] === '' || $fields['d_education'] === '') {
                    $message = 'Debe ingresar un estado civil, una ocupación y un nivel educacional para el fallecido';
                    $errorIds[] = 'd_marital_status';
                    $errorIds[] = 'd_occupation';
                    $errorIds[] = 'd_education';
                    $status = 'fail';
                }

                if ($fields['v_cost'] === '' || $fields['v_cost'] <= 0) {
                    $fields['v_cost'] = 0;
                }

                if ($status === 'success') {
                    $Contract = new Contract();
                    $fields['date'] = date('Y-m-d');
                    $fields['user_id'] = Session::Read('user');
                    $fields['v_total'] = $fields['v_cost'] - (intVal($fields['v_discount']) ?? 0);
                    $fields['v_payment'] = $fields['v_total'] - (intVal($fields['v_coverage']) ?? 0);
                    $fields['f_datetime'] = $fields['f_date'].' '.$fields['f_time'];
                    $Contract->set($fields);
                    if (isset($fields['id']) && $Contract->get('id') > 0) {
                        if ($Contract->update()) {
                            $contractId = $fields['id'];
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible actualizar el contrato';
                        }
                    } else {
                        if ($Contract->create()) {
                            $contractId = $Contract->get('id');
                        } else {
                            $status = 'fail';
                            $message = 'No fue posible guardar el contrato';
                        }
                    }
                }

                if (count($errorIds) > 3) {
                    $message = 'Formulario incompleto';
                }

                return [
                    'status' => $status,
                    'message' => $message,
                    'id' => $contractId,
                    'errors' => $errorIds,
                    'fields' => $fields
                ];
            }
        );
    }

    public function list (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Contrato existente';
                $contract = [];
                $Contract = new Contract();
                if (!isset($fields['id'])) {
                    $contract = $Contract->list();
                } else {
                    if ($fields['id'] === '' || !$Contract->exists('id', $fields['id'])) {
                        $status = 'fail';
                        $message = 'Contrato inexistente';
                    } else {
                        $Contract->set(['id' => $fields['id']]);
                        $Contract->read();
                        $contract = $Contract->toArray();
                    }
                }
                return [
                    'status' => $status,
                    'message' => $message,
                    'contract' => $contract
                ];
            }
        );
    }

    public function delete (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Contrato eliminado correctamente';

                $Contract = new Contract();
                if (isset($fields['id']) && $fields['id'] !== '' && $Contract->exists('id', $fields['id'])) {
                    $Contract->set(['id' => $fields['id']]);
                    $Contract->read();
                    $Contract->set(['active' => 0]);
                    if (!$Contract->update()) {
                        $status = 'fail';
                        $message = 'No fue posible eliminar el contrato';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

    public function recover (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Contrato reactivado correctamente';

                $Contract = new Contract();
                if (isset($fields['id']) && $fields['id'] !== '' && $Contract->exists('id', $fields['id'])) {
                    $Contract->set(['id' => $fields['id']]);
                    $Contract->read();
                    $Contract->set(['active' => 1]);
                    if (!$Contract->update()) {
                        $status = 'fail';
                        $message = 'No fue posible reactivar el contrato';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

    public function addInvoice (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Contrato actualizado correctamente';

                $Contract = new Contract();
                if (isset($fields['id']) && $fields['id'] !== '' && $Contract->exists('id', $fields['id'])) {
                    $Contract->set(['id' => $fields['id']]);
                    $Contract->read();
                    $Contract->set(['invoice' => $fields['invoice']]);
                    if (!$Contract->update()) {
                        $status = 'fail';
                        $message = 'No fue posible modificar el contrato';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

    public function togglePayment (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Contrato actualizado correctamente';

                $Contract = new Contract();
                if (isset($fields['id']) && $fields['id'] !== '' && $Contract->exists('id', $fields['id'])) {
                    $Contract->set(['id' => $fields['id']]);
                    $Contract->read();
                    if (isset($fields['date']) && $fields['date'] !== '' && $fields['date'] !== '0000-00-00') {
                        $Contract->set(['paid_date' => $fields['date']]);
                    } else {
                        $Contract->set(['paid_date' => null]);
                    }

                    if (!$Contract->update()) {
                        $status = 'fail';
                        $message = 'No fue posible modificar el contrato';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message
                ];
            }
        );
    }

    public function sendByEmail (array $fields): array {
        return self::RequiresAuthorization(
            static function () use ($fields) {
                $status = 'success';
                $message = 'Contrato enviado correctamente';

                if (isset($fields['id']) && $fields['id'] !== '') {

                    $to = $fields['email'];
                    $subject = "Contrato Funeraria del Buen Pastor";

                    $headers = "From: " . strip_tags("contacto@funerariadelbuenpastor.cl") . "\r\n";
                    $headers .= "Reply-To: ". strip_tags("contacto@funerariadelbuenpastor.cl") . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    $Contract = new Contract();
                    $contract = $Contract->list($fields['id']);
                    $content = base64_encode(serialize($contract));

                    $message = '<div style="background-color:#EEE;padding:40px">
                        <div style="border-radius:5px;border:1px solid #eee;background:#FFF;padding:20px;box-shadow:0 10px 25px -20px #000">
                            <h3 style="font-size:20px;margin:10px 0">Funeraria del Buen Pastor</h3>
                            <p>Adjunto en este correo va un link para revisar e imprimir el contrato generado</p><br>
                            <a style="border: 1px solid #BBB;padding:10px 20px;border-radius:3px;color:#444;text-decoration:none" href="https://fdbp.acode.cl/app/preview/external.php?content=' . $content . '">Ver Contrato</a><br><br>
                            <p style="text-align:right;color:#999"><small><i>Si usted no ha realizado ningun contrato con la funeraria, por favor ignore este correo.</i></small></p>
                        </div>
                    </div>';

                    $ok = mail($to, $subject, $message, $headers);

                    if (!$ok) {
                        $status = 'fail';
                    }
                }

                return [
                    'status' => $status,
                    'message' => $message,
                    'fields' => $fields
                ];
            }
        );
    }

}