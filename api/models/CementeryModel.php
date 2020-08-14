<?php

use Base\Model;

/**
 * Class Cementery
 */
class Cementery extends Model {

    public function __construct () {
        $this->table = 'cementeries';
        parent::__construct();
    }

}