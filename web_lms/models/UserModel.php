<?php

namespace App\Models;

class UserModel {
    public $name;
    public $role;
    public function __construct($name, $role) {
        $this->name = $name;
        $this->role = $role;
    }
}