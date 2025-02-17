<?php

namespace App\Controller;

use App\Models\UserModel;

class UserControl {
    public function index() {
        require_once __DIR__ . '/../models/UserModel.php';
        $userModel = new UserModel();
        $user = $userModel->getUserData();

        require_once __DIR__ . '/../view/home.php';
    }
}
?>