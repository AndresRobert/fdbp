<?php

use Base\Model;

/**
 * Class Contract
 */
class Contract extends Model {

    public function __construct () {
        $this->table = 'contracts';
        parent::__construct();
    }

}