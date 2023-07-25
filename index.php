<?php
// In this file start application

require_once './models/bootcamp.model.php';
require_once './controllers/bootcamp.controller.php';

$controller = new BootcampController();
$controller->index();

?>