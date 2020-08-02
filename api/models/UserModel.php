<?php

use Base\Model;

/**
 * This is an example class to show how easy is to add a model, but it needs an actual model to be used :/.
 *
 * Class User
 */
class User extends Model {

    /**
     * User constructor.
     */
    public function __construct () {
        $this->table = 'users';
        parent::__construct();
    }

}