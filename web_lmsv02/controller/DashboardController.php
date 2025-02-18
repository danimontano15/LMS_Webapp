<?php

namespace App\Controller;

class DashboardController {
    public function index() {
        require_once 'models/UserModel.php';
        $user = new \App\Models\UserModel("Maloi Ricalde", "Resident");
        require_once 'view/dashboard.php';
    }
}
?>
