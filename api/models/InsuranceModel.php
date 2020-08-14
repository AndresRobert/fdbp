<?php

use Base\Model;

/**
 * Class Insurance
 */
class Insurance extends Model {

    public function __construct () {
        $this->table = 'insurances';
        parent::__construct();
    }

}