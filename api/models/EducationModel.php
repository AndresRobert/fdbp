<?php

use Base\Model;

/**
 * Class Education
 */
class Education extends Model {

    public function __construct () {
        $this->table = 'educations';
        parent::__construct();
    }

}