<?php

use Base\Model;

/**
 * Class Contract
 */
class Contract extends Model {

    /**
     * User constructor.
     */
    public function __construct () {
        $this->table = 'contracts';
        parent::__construct();
    }

}