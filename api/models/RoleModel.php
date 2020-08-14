<?php

use Base\Model;

/**
 * Class Role
 */
class Role extends Model {

    public function __construct () {
        $this->table = 'roles';
        parent::__construct();
    }

}