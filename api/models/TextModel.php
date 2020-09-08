<?php

use Base\Model;

/**
 * Class Text
 */
class Text extends Model {

    public function __construct () {
        $this->table = 'texts';
        parent::__construct();
    }

}