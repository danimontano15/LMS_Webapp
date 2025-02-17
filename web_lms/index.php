<?php

require_once 'controller/UserControl.php';
require_once 'controller/CourseControl.php';

use App\Controller\UserControl;
use App\Controller\CourseControl;

$controller = new UserControl();
$controller->index();

$courseController = new CourseControl();
$courseController->index();