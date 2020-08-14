<?php

use Base\Model;

/**
 * Class Quotation
 */
class Quotation extends Model {

    public function __construct () {
        $this->table = 'quotations';
        parent::__construct();
    }

}