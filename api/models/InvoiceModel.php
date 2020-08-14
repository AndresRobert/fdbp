<?php

use Base\Model;

/**
 * Class Invoice
 */
class Invoice extends Model {

    public function __construct () {
        $this->table = 'invoices';
        parent::__construct();
    }

}