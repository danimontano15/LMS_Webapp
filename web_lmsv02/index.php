<?php
require_once 'controller/DashboardController.php';
use App\Controller\DashboardController;
$controller = new DashboardController();
$controller->index();
?>