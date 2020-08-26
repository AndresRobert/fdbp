<?php

use Base\Model;
use Kits\Database\MySQL;

/**
 * Class Service
 */
class Service extends Model {

    public function __construct () {
        $this->table = 'services';
        parent::__construct();
    }

    public function providers() {
        $query = 'SELECT services.id as id, providers.name as name FROM services LEFT JOIN providers ON provider_id = providers.id WHERE services.active = 1';
        $statement = MySQL::ComplexSelect($query);
        return $statement['status'] === 'success' ? $statement : ['response' => []];
    }

    public function colors() {
        $query = 'SELECT id as id, color as name FROM services WHERE active = 1';
        $statement = MySQL::ComplexSelect($query);
        return $statement['status'] === 'success' ? $statement : ['response' => []];
    }

}