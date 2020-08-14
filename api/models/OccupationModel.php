<?php

use Base\Model;

/**
 * Class Occupation
 */
class Occupation extends Model {

    public function __construct () {
        $this->table = 'occupations';
        parent::__construct();
    }

}