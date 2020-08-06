<?php

require_once MDL.'ContractModel.php';

use Base\Response;
use Kits\Auth;
use Kits\Text;
use Kits\Session;

class Contracts extends Response {

    public function save (array $fields): array {
        $response = [
            'status' => 'fail',
            'message' => 'Testing',
            'id' => '0',
            fields => $fields
        ];
        return $response;
    }

}