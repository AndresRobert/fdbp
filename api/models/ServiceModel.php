<?php

use Base\Model;

/**
 * Class Service
 */
class Service extends Model {

    public function __construct () {
        $this->table = 'services';
        parent::__construct();
    }

}