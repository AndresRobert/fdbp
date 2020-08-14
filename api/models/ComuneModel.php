<?php

use Base\Model;
use Kits\Database\MySQL;

/**
 * Class Comune
 */
class Comune extends Model {

    public function __construct () {
        $this->table = 'comunes';
        parent::__construct();
    }

    public function regions() {
        $query = 'SELECT region_id, region_name FROM comunes WHERE active = 1 GROUP BY region_id';
        $statement = MySQL::ComplexSelect($query);
        return $statement['status'] === 'success' ? $statement['response'] : [];
    }

}