<?php

use Base\Model;

/**
 * Class MaritalStatus
 */
class MaritalStatus extends Model {

    public function __construct () {
        $this->table = 'marital_status';
        parent::__construct();
    }

}