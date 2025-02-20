<?php
namespace App\Controller;
class DashboardController {
    public function index() {
        require_once 'UserModel.php';
        $user = new \App\Models\UserModel("Maloi Ricalde", "Resident");
        require_once 'dashboard.php';
    }
}
?>