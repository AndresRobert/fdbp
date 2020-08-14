<?php

use Base\Model;

/**
 * Class Provider
 */
class Provider extends Model {

    public function __construct () {
        $this->table = 'providers';
        parent::__construct();
    }

}